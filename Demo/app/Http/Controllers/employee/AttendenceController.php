<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use App\Models\Attendence;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class AttendenceController extends Controller
{
    public function index()
    {
        $attendences = Attendence::with('user')->get();
        return view('employee.attendence', compact('attendences'));
    }

    public function starttime()
    {
        $user = auth()->user();

        $date = Carbon::now()->toDateString();

        $attendance = Attendence::where('user_id', $user->id)

            ->where('date' , $date)

            ->first();

        if (!$attendance) {

            Attendence::create([

                'user_id' => $user->id,

                'date' => $date,

                'check_in_time' => Carbon::now(),

            ]);

        }

        return redirect('employee/attendence');
    }


    public function stoptime()
    {

        $user = auth()->user();

        $timer = Attendence::where('user_id', $user->id)

            ->whereDate('date', Carbon::now())

            ->first();

        if ($timer) {

            $timer->check_out_time = Carbon::now();

            $start = Carbon::parse($timer->check_in_time);

            $end = Carbon::parse($timer->check_out_time);

            $duration = $end->diffInSeconds($start);

            $timer->total_hours = $duration;

            $timer->save();
        }

        return redirect('employee/dashboard');
    }

}
