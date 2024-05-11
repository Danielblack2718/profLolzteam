<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'repeat_password' => 'required|same:password'
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);
        $user->save();

        Auth::login($user);

        return response()->json([
            'message' => 'User registered successfully',
            "redirect" => route("login")
        ]);
    }

    public function login(Request $request)
    {   
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !password_verify($request->password, $user->password)) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }
        Auth::login($user);
        return response()->json([
            'message' => 'Logged in successfully',
            "redirect" => route("panel")
        ]);
        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return response()->json([
            'message' => 'Logged out successfully'
        ]);
    }
}
