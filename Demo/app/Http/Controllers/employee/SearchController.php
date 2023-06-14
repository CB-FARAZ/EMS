<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use App\Models\Attendence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $date = $request->date;

        if (empty($date)) {
            return redirect()->back()->with('error', 'Search string is empty');
        }

        $attendences = Attendence::where('date', $date)->get();

        if ($attendences->isEmpty()) {
            return redirect()->back()->with('error', 'No attendance found for the given date');
        }

        return view('employee.dash')->with('attendences', $attendences);
    }

}
