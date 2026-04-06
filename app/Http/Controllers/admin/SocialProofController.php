<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SocialProof;
use App\Models\User;
use App\Models\UserLedger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SocialProofController extends Controller
{
    public function index()
    {
        $proofs = SocialProof::with('user')->latest()->get();
        return view('admin.pages.social-proof.index', compact('proofs'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:approved,rejected',
            'review_note' => 'nullable|string|max:500',
        ]);

        $proof = SocialProof::with('user')->findOrFail($id);

        if ($proof->status !== 'pending') {
            return redirect()->back()->with('error', 'Essa solicitacao ja foi revisada.');
        }

        DB::transaction(function () use ($proof, $request) {
            $proof->status = $request->status;
            $proof->review_note = $request->review_note;
            $proof->reviewed_by = admin()->id();
            $proof->reviewed_at = now();
            $proof->save();

            if ($request->status === 'approved') {
                $user = $proof->user;
                User::where('id', $user->id)->update([
                    'balance' => $user->balance + $proof->payout_amount,
                ]);

                $ledger = new UserLedger();
                $ledger->user_id = $user->id;
                $ledger->reason = 'share_bonus';
                $ledger->perticulation = 'Bonus por compartilhamento validado';
                $ledger->amount = $proof->payout_amount;
                $ledger->debit = $proof->payout_amount;
                $ledger->status = 'approved';
                $ledger->step = 'social-proof';
                $ledger->date = date('d-m-Y H:i');
                $ledger->save();
            }
        });

        return redirect()->back()->with('success', 'Validacao atualizada com sucesso.');
    }
}
