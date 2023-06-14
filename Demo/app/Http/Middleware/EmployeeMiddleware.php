<?php

namespace App\Http\Middleware;

use App\Models\User;
use Auth;
use Closure;
use Redirect;

class EmployeeMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated and is an user
        if (Auth::check() && Auth::user()->isUser()) {

            return $next($request);
        }


        // Redirect the user to the appropriate page or display an error message
        return Redirect::route('login')->withInput()->withErrors([

            'error' => 'Please login to continue.'

        ]);



    }

}
