<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use App\Models\Attendence;
use Carbon\Carbon;


class AttendenceController extends Controller
{
    public function index()
    {
        $attendences = Attendence::all();

        return view('employee.attendence', compact('attendences'));
    }

    public function starttime()
    {
        $user = auth()->user();

        $date = Carbon::now()->toDateString();

        $attendance = Attendence::where('user_id', $user->id)
            ->where('date', $date)
            ->first();

        if (!$attendance) {
            Attendence::create([
                'user_id' => $user->id,
                'date' => $date,
                'time_in' => Carbon::now(),
            ]);
        }

        return redirect('employee/attendence');
    }

    public function stoptime()
    {
        $user = auth()->user();

        $attendances = Attendence::where('user_id', $user->id)
            ->whereDate('date', Carbon::now())
            ->get();

        foreach ($attendances as $attendance) {

            $attendance->time_out = Carbon::now();

            $start = Carbon::parse($attendance->time_in);

            $end = Carbon::parse($attendance->time_out);

            $duration = $end->diffInSeconds($start);

            $attendance->duration = $duration;

            $attendance->save();
        }

        return redirect('employee/attendence');
    }








}
