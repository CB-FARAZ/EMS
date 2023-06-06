<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attendence;
use http\Client\Request;


class ReportController extends Controller
{
    public function index()
    {
        $attendences = Attendence::all();

        return view('admin.Report', compact('attendences'));
    }


    public function search(\Illuminate\Http\Request $request)
    {


         $attendences =  Attendence::where('date', $request->date)->get();

         return view('admin/Report')->with('attendences' , $attendences);
    }

}
