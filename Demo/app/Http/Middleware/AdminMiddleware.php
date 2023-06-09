<?php

namespace App\Http\Middleware;

use App\Models\User;
use Auth;
use Closure;
use Illuminate\Support\Facades\Redirect;

class AdminMiddleware
{
    public function handle($request, Closure $next)

    {

        // Check if the user is authenticated and is an admin

        if (Auth::check() && User::where('type' , 'admin')) {

            return $next($request);
        }

        // Redirect the user to the appropriate page or display an error message

        return redirect()->route('login');

    }
}
