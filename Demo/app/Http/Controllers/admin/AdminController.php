<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('admin.setting', compact('user'));
    }

    public function store(Request $request)
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

        Session::flash('message', 'Successfully Updated the User Profile.');
        Session::flash('alert-class', 'bg-green-100 border border-green-400 px-4 py-3 rounded relative duration-100');

        return redirect()->route('admin.profile');
    }

    public function loginAsUser($id)
    {
        $user = User::findOrFail($id);

        if ($user) {

            // Check admin status
            $status = Auth::user()->status;

            Auth::user()->update(['status' => 'Inactive']);

            Auth::loginUsingId($user->id);

            $user->update(['status' => 'active']);


            return redirect()->route('emp.dashboard');
        }

        return back()->withErrors(['error' => 'User not found']);
    }

}















































































































































