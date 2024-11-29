<?php

namespace App\Http\Controllers;

use App\Events\LoginEvent;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {

        $userdata = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|min:8'
        ]);

        if(!Auth::attempt($userdata)) {
            return response()->json([
                'message' => 'Invalid credentials'
            ]);
        }

        $user = Auth::user();

        $token = $user->createToken('API token')->plainTextToken;

        event(new LoginEvent($user));

        return response()->json([
            'token' => $token
        ]);
    }

    public function register(Request $request) {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|min:8'
        ]);
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }
}
