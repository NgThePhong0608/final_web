<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Register a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|string|email|unique:users|max:255',
            'user_password' => 'required|string|min:6',
            'user_birth' => 'required|string|max:255',
            'user_gender' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Error in Register',
                'error' => $validator->errors(),
            ]);
        }

        $emails = User::pluck('user_email')->toArray();
        if (in_array($request->input('user_email'), $emails)) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Error in Register',
                'error' => 'Email already exists',
            ]);
        }
        // Create a new user using Eloquent
        $user = User::create([
            'user_name' => $request->input('user_name'),
            'user_email' => $request->input('user_email'),
            'user_password' => Hash::make($request->input('user_password')),
            'user_birth' => $request->input('user_birth'),
            'user_gender' => $request->input('user_gender'),
        ]);

        return response()->json([
            'status_code' => 200,
            'message' => 'User registered successfully',
            'data' => new UserResource($user),
        ]);
    }

    /**
     * Login and create a token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_email' => 'required|string|email',
            'user_password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Error in Login',
                'error' => $validator->errors(),
            ]);
        }

        // Retrieve the user by email using the DB facade
        $user = DB::table('users')->where('user_email', $request->input('user_email'))->first();
        if (!$user) {
            return response()->json([
                'status_code' => 404,
                'message' => 'User not found',
            ]);
        }

        // Check if the provided password matches the hashed password in the database
        if (Hash::check($request->input('user_password'), $user->user_password)) {
            return response()->json([
                'status_code' => 200,
                'message' => 'Login successful',
                'data' => $user,
            ]);
        } else {
            return response()->json([
                'status_code' => 401,
                'message' => 'Invalid credentials',
            ]);
        }
    }
}
