<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Purchase;
use App\Models\User;
use App\Models\UserLedger;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    public function purchaseConfirmation($id)
    {
        session()->put('pop', true);

        $package = Package::findOrFail($id);

        if ($package->status !== 'active') {
            return back()->with('error', 'Plano indisponível no momento.');
        }

        return DB::transaction(function () use ($package) {
            $user = User::whereKey(Auth::id())->lockForUpdate()->firstOrFail();
            $isFirstPurchase = ! Purchase::where('user_id', $user->id)->lockForUpdate()->exists();

            if ($isFirstPurchase && $package->tab !== 'vip') {
                return back()->with('error', 'Para ativar a conta e sair do Nível 0, compre primeiro um plano base.');
            }

            if (! $isFirstPurchase) {
                if ($package->tab === 'vip') {
                    return back()->with('error', 'Os planos base servem apenas para ativação inicial.');
                }

                $requiredLevel = gla_package_level($package);
                $currentLevel = gla_user_vip_level($user->id);

                if ($currentLevel < $requiredLevel) {
                    return back()->with('error', 'Seu nível atual não libera esse ciclo. Necessário ' . gla_level_label($requiredLevel) . '.');
                }

                $previousPurchase = Purchase::where('user_id', $user->id)
                    ->where('package_id', $package->id)
                    ->lockForUpdate()
                    ->exists();

                if ($previousPurchase) {
                    return back()->with('error', 'Cada plano pode ser adquirido apenas uma única vez.');
                }
            }

            if ($package->price > $user->deposit_balance) {
                return back()->with('error', 'Saldo de depósito insuficiente.');
            }

            $dailyIncome = round($package->commission_with_avg_amount / max(1, (int) $package->validity), 2);

            $user->deposit_balance = $user->deposit_balance - $package->price;
            $user->save();

            $purchase = new Purchase();
            $purchase->user_id = $user->id;
            $purchase->package_id = $package->id;
            $purchase->tab = $package->tab;
            $purchase->amount = $package->price;
            $purchase->hourly = round($dailyIncome / 24, 4);
            $purchase->daily_income = $dailyIncome;
            $purchase->return_total = $package->commission_with_avg_amount;
            $purchase->date = now()->addHours(24);
            $purchase->validity = now()->addDays((int) $package->validity);
            $purchase->status = 'active';
            $purchase->save();

            $newTotalInvestment = (float) Purchase::where('user_id', $user->id)->sum('amount');
            $newVipLevel = gla_vip_level_from_total($newTotalInvestment);

            $user->package_tab = $newVipLevel > 0 ? 'VIP ' . $newVipLevel : 'Nível 0';
            $user->save();

            $this->payReferralCommissions($user, $package->price, $isFirstPurchase);

            return redirect()->back()->with('success', 'Plano adquirido com sucesso.');
        });
    }


    public function vip_confirm($vip_id)
    {
        $vip = Package::find($vip_id);
        return view('app.main.vip_confirm', compact('vip'));
    }

    protected function ref_user($ref_by)
    {
        return User::where('ref_id', $ref_by)->first();
    }

    protected function payReferralCommissions(User $buyer, float $packagePrice, bool $isFirstPurchase)
    {
        $rates = gla_referral_rates($isFirstPurchase);
        $firstRef = $this->ref_user($buyer->ref_by);

        if (! $firstRef) {
            return;
        }

        $this->creditReferral($firstRef, $buyer, $packagePrice, $rates['first'], 'first');

        $secondRef = $this->ref_user($firstRef->ref_by);
        if (! $secondRef) {
            return;
        }

        $this->creditReferral($secondRef, $buyer, $packagePrice, $rates['second'], 'second');

        $thirdRef = $this->ref_user($secondRef->ref_by);
        if (! $thirdRef) {
            return;
        }

        $this->creditReferral($thirdRef, $buyer, $packagePrice, $rates['third'], 'third');
    }

    protected function creditReferral(User $receiver, User $buyer, float $packagePrice, float $rate, string $step)
    {
        if ($rate <= 0) {
            return;
        }

        $amount = round(($packagePrice * $rate) / 100, 2);

        User::where('id', $receiver->id)->update([
            'balance' => $receiver->balance + $amount,
        ]);

        $ledger = new UserLedger();
        $ledger->user_id = $receiver->id;
        $ledger->get_balance_from_user_id = $buyer->id;
        $ledger->reason = 'commission';
        $ledger->perticulation = 'Comissao de indicacao da compra de ' . ($buyer->username ?: $buyer->email);
        $ledger->amount = $amount;
        $ledger->debit = $amount;
        $ledger->status = 'approved';
        $ledger->step = $step;
        $ledger->date = date('d-m-Y H:i');
        $ledger->save();
    }
}
