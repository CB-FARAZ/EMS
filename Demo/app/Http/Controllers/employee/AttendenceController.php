<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use App\Models\Attendence;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function index()
    {
        $attendances = Attendence::all();

        return view('employee.attendence', compact('attendances'));
    }

    public function startTime()
    {
        $user = auth()->user();
        $date = Carbon::now()->toDateString();

        Attendence::firstOrCreate(
            ['user_id' => $user->id, 'date' => $date],
            ['time_in' => Carbon::now()]
        );


        return redirect('employee/attendence');
    }

    public function stopTime()
    {
        $user = auth()->user();

        $attendance = Attendence::where('user_id', $user->id)
            ->whereNull('time_out')
            ->latest()
            ->first();

        if ($attendance) {

            $attendance->time_out = Carbon::now();

            $attendance->duration = $attendance->time_out->diffInSeconds($attendance->time_in);

            $attendance->save();

        }

        return redirect('employee/attendence');
    }
}
