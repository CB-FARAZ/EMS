<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use MongoDB\Driver\Session;



class EditController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);

        return view('admin.edit', compact('user'));
    }
    public function update(Request $request , $id)
    {
        $user = User::findOrFail($id);

        $user->update($request->all());


        \Illuminate\Support\Facades\Session::flash('message', 'Successfully updated the user!');

        return redirect()->route('edits');
    }

}


