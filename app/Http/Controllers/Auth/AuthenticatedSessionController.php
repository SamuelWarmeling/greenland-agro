<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    private function normalizePhone(?string $phone): string
    {
        $digits = preg_replace('/\D+/', '', (string) $phone);

        // Accept Brazilian inputs with country code and store/login by local mobile number.
        if (str_starts_with($digits, '55') && strlen($digits) >= 12) {
            $digits = substr($digits, 2);
        }

        return ltrim($digits, '0');
    }

    /**
     * Display the login view.
     */
    public function create(Request $request)
    {
        if (Auth::check()){
            return redirect()->route('dashboard');
        }
        return view('app.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        $request->ensureIsNotRateLimited();

        $phone = $this->normalizePhone($request->phone);
        $user = User::where('phone', $phone)->first();

        if (! $user) {
            RateLimiter::hit($request->throttleKey());

            return redirect()->back()->withInput($request->only('phone'))->with('error', 'Telefone nao encontrado. Verifique o numero digitado ou crie seu cadastro.');
        }

        //Check user ban or unban
        if ($user->ban_unban == 'ban') {
            RateLimiter::hit($request->throttleKey());

            return redirect()->back()->with('error', 'Account ban.');
        }

        if (! Hash::check($request->password, $user->password)) {
            RateLimiter::hit($request->throttleKey());

            return redirect()->back()->withInput($request->only('phone'))->with('error', 'Senha incorreta.');
        }

        RateLimiter::clear($request->throttleKey());

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->route('dashboard');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
