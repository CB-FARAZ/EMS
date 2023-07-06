<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

//use http\Env\Request;

class logoutController extends Controller
{

    protected function logout(Request $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $user = auth()->user()->email;
        User::where('email', $user)->update([

            'status' => 'Inactive'

        ]);




        $user = auth()->user()->email;
        User::where('email', $user)->update([

            'last_login_at' => Carbon::now()

        ]);

        Auth::logout();

        return redirect('/admin/login');

    }

}
