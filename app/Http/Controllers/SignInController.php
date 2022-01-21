<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAuthenticateRequest;
use App\Models\User;

class SignInController extends Controller
{
    public function index()
    {
        if (session('user.id')) {
            return redirect()->route('dashboard');
        }
        
        return view('public.signin.index');
    }

    public function authenticate(UserAuthenticateRequest $request)
    {
        $user = User::where('email', '=', $request->email)->first();
        
        if (!$user) {
            return redirect()->route('login')->withErrors(['fail' => 'O email que você inseriu não está conectado a uma conta.']);
        }

        if (password_verify($request->password, $user->password)) {
            session()->put('user', $user);
            
            return redirect()->route('dashboard')->with('success', 'Bem-vindo!');
        } else {
            return redirect()->route('login')->withErrors(['fail' => 'A senha está incorreta.']);;
        }
    }
}
