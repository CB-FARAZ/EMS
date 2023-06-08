<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use App\Models\Attendence;
use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
    public function search(\Illuminate\Http\Request $request)
    {


        $attendences =  Attendence::where('date', $request->date)->get();

        return view('employee.dash')->with('attendences' , $attendences);
    }

}
