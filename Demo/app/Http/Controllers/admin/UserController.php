<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $users = User::where('type', 'user')->get();
        return view('admin/show', compact('users'));
    }

    public function destroy(Request $request)
    {
        User::where('id', $request->id)->delete();

        Session::flash('message', 'Successfully Deleted the User!');
        return redirect()->route('employee');
    }


}
