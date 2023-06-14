<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    //

    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        // load the login blade

        return view('admin/login');

    }


    /**
     * Authenticate user
     *
     * @param Request $request
     *
     * @return RedirectResponse
     *
     */
    public function authenticateLoginRequest(Request $request): RedirectResponse
    {

        $attributes = $request->validate([

            'email' => 'required|max:50',

            'password' => 'required|max:255',

        ]);

        $user = User::where('email', $attributes['email'])->first();

        if (!$user || !Hash::check($attributes['password'], $user->password)) {

            return redirect()->back()
                ->withErrors(['hidden' => 'These credentials do not match our records.',
                    'error' => 'Please login to continue.'])
                ->withInput(
                    $request->except('password')

                );
        }

        User::where('email', $request->email)->update([
            'status' => 'active'

        ]);

        User::where('email', $request->email)->update([

            'last_login_at' => Carbon::now()

        ]);


        auth()->login($user);


        $type = User::where('email', $request->email)->first();

        return ($type && $type->isAdmin()) ? redirect('admin/dashboard') : redirect('employee/dashboard');



    }


}

