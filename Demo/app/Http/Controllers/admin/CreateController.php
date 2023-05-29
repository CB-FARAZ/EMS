<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CreateController extends Controller
{
    //

    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        // load the login blade

        return view('create');

    }


    /**
     * Authenticate user
     *
     * @param Request $request
     *
     * @return RedirectResponse
     *
     */
    public function Request(Request $request): RedirectResponse
    {
        $attributes = $request->validate([


            'name' => 'required|max:20',
            'email' => 'required|max:50',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $attributes['name'],
            'email' => $attributes['email'],
            'password' => Hash::make($attributes['password']),

        ]);

        User::where('email' , $request->email)->update([
            'status' => 'Inactive'

        ]);

        User::where('email', $request->email)->update([

            'last_login_at' => Carbon::now()

        ]);

        User::where('email' , $request->email)->update([

            'type' => 'User'

        ]);

        auth()->login($user);

        return redirect('/user/users');
    }


    public function __construct()
    {

        $this->middleware('auth');


    }


}
