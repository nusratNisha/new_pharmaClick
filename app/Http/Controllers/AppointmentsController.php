<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Doctor;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function appointments()
    {
        $doctors = Doctor::all();

        return view('pages/appointments', compact('doctors'));
    }
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'appointment_type' => 'required|in:online,offline',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|date_format:H:i',
        ]);

        // Create the new appointment in the database
        Appointment::create([
            'doctor_id' => $request->doctor_id,
            'appointment_type' => $request->appointment_type,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
        ]);

        return redirect()->route('home');
    }
}
