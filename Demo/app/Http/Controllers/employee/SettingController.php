<?php

namespace App\Http\Controllers\employee;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class SettingController extends Controller
{
    public function employee()
    {
        $user = Auth::user();

        return view('employee.setting', compact('user'));
    }

    public function employeeupdate(Request $request)
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


        return redirect()->route('emp/profile' , ['id' => $user->id]);
    }
}



