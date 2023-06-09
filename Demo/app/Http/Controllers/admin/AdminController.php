<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    public function accountInfo()
    {
        $user = Auth::user();

        return view('admin.setting', compact('user'));
    }

    public function accountInfoStore(Request $request)
    {
        $request->validate([

            'name' => 'required',

            'email' => 'required',

            'password' => 'required'

        ]);

        $user = Auth::user();

        $user->name = $request->input('name');

        $user->email = $request->input('email');

        $user->save();

        Session::flash('message', 'Profile Updated');

        return redirect()->route('profile');
    }

    public function loginAsUser($user_id)
    {
        $user = User::find($user_id);

        if ($user) {

            Auth::login($user);
            return redirect()->route('emp/dashboard');

        }

        return back()->withErrors(['error' => 'User not found']);
    }
}















































































































































