<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        return $request->all();
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function change_password()
    {
        return view('app.auth.change_password');
    }

    public function login_password()
    {
        return view('app.auth.login_password');
    }

    public function change_password_confirm(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
        ]);

        if ($validate->fails()) {
            return back()->with('error', 'Preencha todos os campos obrigatórios.');
        }

        $user = User::find(Auth::id());
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with('error', 'A senha atual não confere.');
        }

        if ($request->new_password != $request->confirm_password) {
            return back()->with('error', 'A confirmação da nova senha não confere.');
        }

        $user->password = Hash::make($request->confirm_password);
        $user->update();

        return back()->with('success', 'Senha alterada com sucesso.');
    }

    public function change_tpassword_confirm(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'login_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
        ]);

        if ($validate->fails()) {
            return back()->with('error', 'Preencha todos os campos obrigatórios.');
        }

        $user = User::find(Auth::id());
        if (!Hash::check($request->login_password, $user->password)) {
            return back()->with('error', 'A senha de acesso informada está incorreta.');
        }

        if ($request->new_password != $request->confirm_password) {
            return back()->with('error', 'A confirmação da nova senha transacional não confere.');
        }

        $user->withdraw_password = $request->confirm_password;
        $user->update();

        return back()->with('success', 'Senha transacional alterada com sucesso.');
    }
}