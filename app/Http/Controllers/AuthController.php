<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422, // Unprocessable Entity
                'validation_errors' => $validator->messages(),
                'message' => 'Validation failed. Please check the input fields.',
            ]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken($user->email . '_Token')->plainTextToken;

        return response()->json([
            'status' => 200,
            'name' => $user->name,
            'token' => $token,
            'message' => 'User registered successfully',
        ]);
    }

    public function login(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt login
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'status' => 401,
                'message' => 'Invalid credentials.',
            ]);
        }

        // Retrieve authenticated user
        $user = Auth::user();

        // Create a token
        $token = $user->createToken('auth_token')->plainTextToken;

        // Return success response with token
        return response()->json([
            'status' => 200,
            'name' => $user->name,
            'access_token' => $token,
            'token_type' => 'Bearer',
            'message' => 'Login successful!',
        ]);
    }

    public function logout(Request $request)
    {
        // Revoke all tokens associated with the authenticated user
        $request->user()->tokens()->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Logged out successfully.',
        ]);
    }
}
