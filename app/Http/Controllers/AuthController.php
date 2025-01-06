<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{



    public function showRegistrationForm()
    {
        return view('pages.auth.registerUser');
    }
    public function showLoginForm()
    {
        return view('pages.auth.loginUser');
    }


    public function register(Request $request)
    {
        // Validate incoming request data
        $validated = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:doctor,patient,dentist',
            'phone' => 'required|string|max:15',
            'matric_id' => 'required|string|unique:users|max:50',
        ]);

        // Check if validation fails
        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        // Create user using validated data
        $user = User::create([
            'name' => $validated->validated()['name'],
            'email' => $validated->validated()['email'],
            'password' => Hash::make($validated->validated()['password']),
            'role' => $validated->validated()['role'],
            'phone' => $validated->validated()['phone'],
            'matric_id' => $validated->validated()['matric_id'],
            'status' => 'pending',
        ]);

        // Return the user response
        // Optional: log the user in after registration
        auth()->login($user);

        // Redirect or return a response
        return redirect()->route('home');
    }


    public function login(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'matric_id' => 'required|string|max:50',
            'password' => 'required|string|min:8',
        ]);

        // Attempt to find the user by matric_id
        $user = User::where('matric_id', $validated['matric_id'])->first();

        // Check if the user exists and if the password is correct
        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return redirect()->back()->withErrors(['matric_id' => 'Invalid matric ID or password.'])->withInput();
        }
        // Generate an API token
        $token = $user->createToken('auth_token')->plainTextToken;
        // Log the user in
        auth()->login($user);

        // Redirect or return a response after successful login
        return redirect()->route('home');
    }



    public function logout(Request $request)
    {
        // Check if user is authenticated
        if ($request->user()) {
            // Delete the current access token if it exists
            if ($request->user()->currentAccessToken()) {
                $request->user()->currentAccessToken()->delete();
            }
        }
        // Logout the user from Laravel's session-based authentication
        Auth::logout();

        // Redirect to the login page
        return redirect()->route('login');
    }
}
