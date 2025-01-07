<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Doctor;
use App\User;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function appointments()
    {
        $doctors = User::where('role', 'doctor')->get();

        $userAppointments = Appointment::where('user_id', auth()->user()->id)
            ->where(function ($query) {
                $query->where('date', '>', now()->toDateString()) // Future date
                    ->orWhere(function ($query) {
                        $query->where('date', '=', now()->toDateString()) // Today’s date
                            ->where('time', '>', now()->toTimeString()); // Future time on the same day
                    });
            })
            ->get();


        $doctorAppointments = Appointment::where('doctor_id', auth()->user()->id)->where(function ($query) {
            $query->where('date', '>', now()->toDateString()) // Future date
                ->orWhere(function ($query) {
                    $query->where('date', '=', now()->toDateString()) // Today’s date
                        ->where('time', '>', now()->toTimeString()); // Future time on the same day
                });
        })->get();


        return view('pages/appointments', compact('doctors', 'userAppointments', 'doctorAppointments'));
    }
    public function store(Request $request)
    {

        // Validate the request data
        $request->validate([
            'doctor_id' => 'required',
            'type' => 'required|in:online,offline',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);
        $request->merge(['user_id' => auth()->user()->id]);
        Appointment::create($request->all());
        return redirect()->route('appointments.index');
    }

    public function cancel(Request $request)
    {
        $appointment = Appointment::find($request->id);
        $appointment->status = 'Canceled';
        $appointment->save();
        return redirect()->route('appointments.index');
    }
    public function approve(Request $request)
    {
        $appointment = Appointment::find($request->id);
        $appointment->status = 'Approved';
        $appointment->save();
        return redirect()->route('appointments.index');
    }
    public function reject(Request $request)
    {
        $appointment = Appointment::find($request->id);
        $appointment->status = 'Rejected';
        $appointment->save();
        return redirect()->route('appointments.index');
    }
}
