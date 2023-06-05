<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;

//use http\Env\Request;

class logoutController extends Controller
{

    protected function logout(): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $userid = \auth()->user()->email;
        User::where('email', $userid)->update([

            'status' => 'Inactive'

        ]);


        $userid = \auth()->user()->email;
        User::where('email', $userid)->update([

            'last_login_at' => Carbon::now()

        ]);

        auth()->logout();

        return redirect('/admin/login');

    }

}
