<?php

namespace App\Http\Middleware;

use Closure;

class UserAuthenticate
{
    public function handle($request, Closure $next)
    {
        if (!session('user')) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}