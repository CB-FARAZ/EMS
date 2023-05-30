<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


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
            'password' => 'required|min:8',
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


        auth()->login($user);

        Session::flash('message', 'Successfully created the User!');

        return redirect('/admin/create');
    }





}
