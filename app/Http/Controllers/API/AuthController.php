<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => '',
            'role' => '',
            'email' => 'string|unique:users,email',
            'password' => 'string',
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'role' => 'buyer',
            'email' => $fields['email'],
            'password' => Hash::make($fields['password']),
        ]);
        $token = $user->createToken('appToken')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response, 201);
    }
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        // Check email
        $user = User::where('email', $fields['email'])->first();
        // Check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad gateway'
            ], 401);
        }
        $token = $user->createToken('appToken')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response, 201);
    }
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
    }
}
