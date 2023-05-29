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

        return view('login');

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

            'password' => 'required|max:10',

        ]);

        $user = User::where('email', $attributes['email'])->first();

        if (!$user || !Hash::check($attributes['password'], $user->password)) {

            return redirect()->back()
                ->withErrors('These credentials do not match our records.')
                ->withInput(
                    $request->except('password')

                );
        }

        User::where('email' , $request->email)->update([
            'status' => 'active'

        ]);

        User::where('email', $request->email)->update([

            'last_login_at' => Carbon::now()

        ]);

        User::where('email' , $request->email)->update([

           'type' => 'Admin'

        ]);

        auth()->login($user );

        return redirect('admin/main');

    }







}










































// the user is found, let's set a success message.
// Read: https://laravel.com/docs/10.x/session#flash-data

// now redirect to home page??




