<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use App\Models\Attendence;

class DashboardController extends Controller
{
    public function index()
    {

        $attendences = Attendence::all();

        return view('employee.dash', compact('attendences'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('month');

        $attendances = Attendence::where('employee_name', 'like', '%' . $keyword . '%')
            ->orWhere('status', 'like', '%' . $keyword . '%')
            ->orWhere('date', 'like', '%' . $keyword . '%')
            ->get();

        return view('employee.attendance', compact('attendances'));
    }


}
