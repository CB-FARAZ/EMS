<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class EditController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);

        return view('admin/edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $attributes = $request->validate([


            'name' => 'required|max:20',
            'email' => 'required|max:50',
            'designation' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required_with:password|same:password|min:8'

        ]);

         $user = User::findOrFail($id);

         $user->name = $attributes['name'];

         $user->email = $attributes['email'];

         $user->designation = $attributes['designation'];

          $user->password = $attributes['password'];


         $designation = $request->input('designation');

         $user->designation = $designation;

         $user->save();

        Session::flash('message', 'Successfully updated the User!');

        return redirect()->route('edit.process', ['id' => $id]);
    }

}



