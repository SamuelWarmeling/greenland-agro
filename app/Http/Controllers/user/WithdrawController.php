<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserLedger;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WithdrawController extends Controller
{
    public function withdraw()
    {
        return view('app.main.withdraw.index');
    }

    public function withdraw_history()
    {
        return view('app.main.withdraw_history');
    }

    public function withdrawRequest(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'amount' => 'required|numeric',
            'password' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        $nowHour = (int) now()->format('G');
        if ($nowHour < 10 || $nowHour >= 17 || setting('w_time_status') === 'inactive') {
            return redirect()->back()->with('error', 'Os saques ficam disponíveis das 10:00 às 17:00.');
        }

        $user = Auth::user();

        if (! $user->gateway_method || ! $user->gateway_number) {
            return redirect()->back()->with('error', 'Cadastre sua chave PIX antes de solicitar saque.');
        }

        $todayWithdraw = Withdrawal::where('user_id', $user->id)
            ->whereDate('created_at', now())
            ->exists();

        if ($todayWithdraw) {
            return redirect()->back()->with('error', 'Você só pode solicitar 1 saque por dia.');
        }

        if ((float) $request->amount > (float) $user->balance) {
            return redirect()->back()->with('error', 'Saldo insuficiente.');
        }

        $minimumWithdraw = gla_withdraw_minimum();
        $maximumWithdraw = (float) setting('maximum_withdraw');

        if ((float) $request->amount < $minimumWithdraw) {
            return redirect()->back()->with('error', 'O saque mínimo é de ' . price($minimumWithdraw) . '.');
        }

        if ($maximumWithdraw > 0 && (float) $request->amount > $maximumWithdraw) {
            return redirect()->back()->with('error', 'O valor máximo permitido no momento é de ' . price($maximumWithdraw) . '.');
        }

        $chargePercent = 10;
        $chargeAmount = round(((float) $request->amount * $chargePercent) / 100, 2);
        $netAmount = (float) $request->amount - $chargeAmount;

        User::where('id', $user->id)->update([
            'balance' => $user->balance - (float) $request->amount,
        ]);

        $withdrawal = new Withdrawal();
        $withdrawal->user_id = $user->id;
        $withdrawal->method_name = $user->gateway_method;
        $withdrawal->number = $user->gateway_number;
        $withdrawal->amount = $request->amount;
        $withdrawal->currency = 'BRL';
        $withdrawal->charge = $chargeAmount;
        $withdrawal->oid = 'W-' . rand(100000, 999999) . rand(100000, 999999);
        $withdrawal->final_amount = $netAmount;
        $withdrawal->status = 'pending';
        $withdrawal->save();

        $ledger = new UserLedger();
        $ledger->user_id = $user->id;
        $ledger->reason = 'withdraw_request';
        $ledger->perticulation = 'Solicitação de saque enviada para análise';
        $ledger->amount = $request->amount;
        $ledger->debit = $netAmount;
        $ledger->status = 'pending';
        $ledger->date = date('d-m-Y H:i');
        $ledger->save();

        return redirect()->back()->with('success', 'Saque solicitado com sucesso. Prazo médio de 2 a 48 horas.');
    }
}
