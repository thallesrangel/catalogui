<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (session('user.role') != 'admin') {
            return redirect()->route('dashboard')->with('warning', 'Acesso negado!');
        }

        return $next($request);
    }
}