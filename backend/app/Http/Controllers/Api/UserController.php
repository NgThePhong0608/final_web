<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return response()->json([
            'success' => true,
            'message' => 'All users in restaurant',
            'data' =>  $users,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $user = DB::table('users')->whre($id, '=', request()->query('id'))->first();

        // if (!$user) {
        //     return response()->json(['error' => 'User not found'], 404);
        // }

        // return response()->json([
        //     'success' => true,
        //     'message' => 'User details',
        //     'data' => new UserResource($user),
        // ], 200);
    }

    public function getUserByEmail($email)
    {
        $user = DB::table('users')->where('user_email', $email)->first();

        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'User found',
                'data' => $user,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User not found',
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
