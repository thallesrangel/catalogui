<?php

namespace App\Http\Controllers;

class SignOutController extends Controller
{
    public function logout()
    {
        session()->flush();
        return redirect()->route('login')->with('logout_success', 'Até mais!');
    }
}
