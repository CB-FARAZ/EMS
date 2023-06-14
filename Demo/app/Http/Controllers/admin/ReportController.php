<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attendence;


class ReportController extends Controller
{
    public function index()
    {
        $attendences = Attendence::all();

        return view('admin.Report', compact('attendences'));
    }


    public function search(\Illuminate\Http\Request $request)
    {


        $date = $request->date;

        if (empty($date)) {
            return redirect()->back()->with('error', 'Search string is empty');
        }

        $attendences = Attendence::where('date', $date)->get();

        if ($attendences->isEmpty()) {

            return redirect()->back()->with('error', 'No attendance found for the given date');

        }

        return view('admin/Report')->with('attendences', $attendences);
    }

}
