<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.loginUser');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }


        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
