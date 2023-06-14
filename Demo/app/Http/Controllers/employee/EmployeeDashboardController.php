<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use App\Models\Attendence;
use http\Client\Request;

class EmployeeDashboardController extends Controller
{
    public function index()
    {

        $attendences = Attendence::all();

        return view('employee.dash', compact('attendences'));
    }




}
