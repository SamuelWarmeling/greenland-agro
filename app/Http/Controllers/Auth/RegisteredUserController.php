<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Checkin;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    private function normalizePhone(?string $phone): string
    {
        $digits = preg_replace('/\D+/', '', (string) $phone);

        if (str_starts_with($digits, '55') && strlen($digits) >= 12) {
            $digits = substr($digits, 2);
        }

        return ltrim($digits, '0');
    }

    /**
     * Display the registration view.
     */
    public function create(Request $request)
    {
        $captcha_code = rand(00000,99999);
        $ref_by = $request->query('member');
        return view('app.auth.registration', compact('ref_by', 'captcha_code'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $phone = $this->normalizePhone($request->phone);
        $request->merge(['phone' => $phone]);

        $validate = Validator::make($request->all(), [
            'name' => ['required', 'string', 'min:3', 'max:80'],
            'phone' => ['required', 'digits_between:10,11', 'unique:users,phone'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'name.required' => 'Informe o nome do produtor.',
            'phone.required' => 'Informe um telefone valido com DDD.',
            'phone.unique' => 'Telefone ja cadastrado.',
            'password.min' => 'A senha precisa ter pelo menos 8 caracteres.',
            'password.confirmed' => 'A confirmacao de senha nao confere.',
        ]);

        if ($validate->fails()){
            $user = User::where('phone', $request->phone)->first();
            if ($user){
                return back()->withInput()->with('message', 'Telefone ja cadastrado.');
            }

            return back()->withErrors($validate)->withInput()->with('message', $validate->errors()->first());
        }


        $getIp = \Request::ip();

        $checkUserIp = DB::table('users')->where('ip', $getIp)->exists();
        if ($checkUserIp){
        }

        //Refer Bonus
//        if ($request->ref_by){
//            $getUser = User::where('ref_id', $request->ref_by)->first();
//            if ($getUser){
//                $first_level_users = User::where('ref_by', $getUser->ref_id)->count();
//                if ($first_level_users <= setting('total_member_register_reword')){
//                    $getUser->reword_balance = $getUser->reword_balance + setting('total_member_register_reword_amount');
//                    $getUser->save();
//                }
//            }
//        }

        //Check refer code is next time edit
        $name = trim((string) $request->name);

        $user = User::create([
            'name' => $name,
            'username' => $this->generateUsername($name, $request->phone),
            'ref_id' => $this->ref_code().$this->ref_code(),
            'ref_by' => $request->ref_by ?: null,
            'email' => 'user'.rand(11111,99999).time().'@gmail.com',
            'password' => Hash::make($request->password),
            'type' => 'user',
            'phone' => $request->phone,
            'balance' => setting('registration_bonus'),
            'phone_code' => '+55',
            'ip' => $getIp,
            'remember_token' => Str::random(30),
        ]);

        if ($user){
            Auth::login($user);

            $checkin = new Checkin();
            $checkin->user_id = $user->id;
            $checkin->date = now();
            $checkin->amount = 0;
            $checkin->save();

            return redirect()->route('dashboard');
        }else{
            return back()->withInput()->with('message', 'Falha ao concluir o cadastro.');
        }

    }

    public function ref_code()
    {
        $str1 = rand(0,99);
        $rand = rand(000,999);

        if (rand(111,999) % 2 == 0){
            $refCode = $str1.$rand;
        }else{
            $refCode = $rand.$str1;
        }
        return $refCode;
    }

    protected function generateUsername(string $name, string $phone): string
    {
        $base = Str::slug(Str::lower($name), '');
        $base = $base !== '' ? $base : 'produtor';
        $candidate = substr($base, 0, 18) . substr($phone, -4);

        while (User::where('username', $candidate)->exists()) {
            $candidate = substr($base, 0, 14) . rand(1000, 9999);
        }

        return $candidate;
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
