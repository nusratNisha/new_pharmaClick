<?php

namespace App\Http\Controllers;


class AppointmentsController extends Controller
{
    public function appointments()
    {
        return view('pages/appointments');
    }
}
