<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)

    {

        // Check if the user is authenticated and is an admin

        if (auth()->check() && User::where('type' , 'admin')) {

            return $next($request);
        }

        // Redirect the user to the appropriate page or display an error message

        return redirect()->route('login')->with('error', 'Unauthorized access.');

    }
}
