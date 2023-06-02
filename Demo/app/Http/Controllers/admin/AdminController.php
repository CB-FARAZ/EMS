<?php

    namespace App\Http\Controllers\admin;


    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;


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

            ]);

            $user = Auth::user()->update($request->except(['_token']));

            if ($user) {

                $message = "Profile updated successfully.";

            }

            return redirect()->route('settings')->with('account_message', $message);
        }
    }


