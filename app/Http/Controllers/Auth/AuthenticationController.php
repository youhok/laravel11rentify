<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    // User Registration
    public function register(RegisterRequest $request)
    {
        // Validate the request
        $request->validated();

        // Create user data array
        $userData = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            // 'id_card' => $request->id_card,
            // 'profile_picture' => $request->profile_picture,
            'role_id' => $request->role_id,  // Assuming you're passing the role id during registration
            // 'social' => $request->social ?? [], // JSON field for social links, if any
            'password' => Hash::make($request->password),
        ];

        // Create the user
        $user = User::create($userData);

        // Generate token for the user
        $token = $user->createToken('laravel11vuerentify')->plainTextToken;

        // Return response with user data and token
        return response([
            'user' => $user,
            'token' => $token
        ], 201);
    }

    // User Login
    public function login(LoginRequest $request)
    {
        // Validate the request
        $request->validated();

        // Find user by email
        $user = User::where('email', $request->email)->first();

        // Check if user exists and password is valid
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'Invalid credentials'
            ], 422);
        }

        // Generate token for the user
        $token = $user->createToken('laravel11vuerentify')->plainTextToken;

        // Return response with user data and token
        return response([
            'user' => $user,
            'token' => $token
        ], 200);
    }
}
