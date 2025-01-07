<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // Show Pending Approval Message
    public function showPendingApproval()
    {
        return view('pages.auth.pending_approval');
    }


    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * Show the form for creating a new user.
     * (Optional if you're using an API-only approach)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return a view or form for creating a user (not common in API)
    }

    /**
     * Store a newly created user (signup).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|in:doctor,patient,dentist',
            'phone' => 'required|string|max:15',
            'matric_id' => 'required|string|unique:users|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => 'pending', // Default status until approved by super admin
            'phone' => $request->phone,
            'matric_id' => $request->matric_id,
        ]);

        return response()->json(['message' => 'User created successfully.', 'user' => $user], 201);
    }

    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json($user);
    }

    /**
     * Show the form for editing the specified user.
     * (Optional if you're using an API-only approach)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Return a view or form for editing a user (not common in API)
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'sometimes|required|string|min:8',
            'role' => 'sometimes|required|in:doctor,patient,dentist',
            'phone' => 'sometimes|required|string|max:15',
            'matric_id' => 'sometimes|required|string|unique:users,matric_id,' . $id,
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if ($request->has('password')) {
            $request->merge(['password' => Hash::make($request->password)]);
        }

        $user->update($request->all());

        return response()->json(['message' => 'User updated successfully.', 'user' => $user]);
    }


    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully.']);
    }

    public function approve($id)
    {
        // Logic for approving the user
        $user = User::findOrFail($id);
        $user->status = 'approved';
        $user->save();

        return redirect()->route('home'); // Redirect to the user listing page or wherever necessary
    }
    public function reject($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'rejected';
        $user->save();

        return redirect()->route('home');
    }
}
