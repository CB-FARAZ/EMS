<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use App\Models\Attendence;
use Auth;
use Carbon\Carbon;

class AttendenceController extends Controller
{
    public function index()
    {
        $attendences = Attendence::all();

        return view('employee.attendence', compact('attendences'));
    }

    public function startTime()
    {
        $user = Auth::user();
        $date = Carbon::now()->toDateString();

        $attendance = Attendence::where('user_id', $user->id)
            ->where('date', $date)
            ->first();

        // Check if the user has already clocked in and has not clocked out yet
        if ($attendance && !$attendance->time_out) {
            return redirect('employee/attendence')->with('message', 'You have already clocked in.');
        }

        Attendence::create([
            'user_id' => $user->id,
            'date' => $date,
            'time_in' => Carbon::now()
        ]);

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
            $duration = $attendance->time_out->diffInSeconds($attendance->time_in);
            $attendance->duration = gmdate('H:i:s', $duration);
            $attendance->save();
        }

        return redirect('employee/attendence');
    }
}
