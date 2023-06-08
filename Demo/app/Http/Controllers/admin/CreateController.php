<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;


class CreateController extends Controller
{
    //

    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        // load the login blade

        return view('admin/create');

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
            'designation' => 'required',
            'type' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required_with:password|same:password|min:8'

        ]);

        $user = User::create([
            'name' => $attributes['name'],
            'email' => $attributes['email'],
            'designation' => $attributes['designation'],
            'type' => $attributes['type'],
            'password' => Hash::make($attributes['password']),
            'password_confirmation' => Hash::make($attributes['password_confirmation']),

        ]);


        User::where('email', $request->email)->update([
            'status' => 'Inactive'

        ]);

        User::where('email', $request->email)->update([

            'last_login_at' => Carbon::now()

        ]);

        User::where('email', $request->email)->update([

            'type' => $request->type

        ]);


        $designation = $request->input('designation');
        $user->designation = $designation;
        $user->save();


        Session::flash('message', 'Successfully Created the User Profile.');

        Session::flash('alert-class', 'bg-green-100 border border-green-400 px-4 py-3 rounded relative duration-50');

        return redirect('/admin/create');
    }


}
