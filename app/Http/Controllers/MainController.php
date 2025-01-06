<?php

namespace App\Http\Controllers;

use App\User;

class MainController extends Controller
{
    public function home()
    {
        $users = User::where('status', 'pending')->get();

        return view('pages/home', compact('users'));
    }
    public function medicalServices()
    {
        return view('pages/medicalServices');
    }
}
