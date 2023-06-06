<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attendence;

class DashboardController extends Controller
{
    public function index()
    {

        $attendences = Attendence::all();

        return view('admin.dash', compact('attendences'));
    }
}
