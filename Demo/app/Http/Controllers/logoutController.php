<?php

namespace App\Http\Controllers;

use App\Models\User;
//use http\Env\Request;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class logoutController extends Controller
{

    protected function logout(): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $userid = \auth()->user()->email;
        User::where('email' , $userid)->update([

            'status' => 'Inactive'

        ]);


        $userid = \auth()->user()->email;
        User::where('email', $userid)->update([

            'last_login_at' => Carbon::now()

        ]);

        auth()->logout();

        return redirect('/');

    }

}
