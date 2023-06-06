<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RestrictMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->type === 'admin') {

            return $next($request);
        }

        return redirect('/');
    }
}

