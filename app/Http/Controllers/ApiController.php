<?php

namespace App\Http\Controllers;

use App\Models\User;

class ApiController
{

    public function login()
    {
        $user = User::where('email', request('email'))->first();
        if (!empty($user)) {
            return response()->json([
                'email' => request('email'),
                'password' => request('password'),
                'data' => $user,
                'message' => 'email is valid',
                'status' => 200,
            ]);
        } else {
            return response()->json([
                'email' => request('email'),
                'password' => request('password'),
                'message' => 'The credential are invalid',
                'status' => 404,
            ]);
        }
    }
    public function getProfile()
    {
        $userId = request('id');
        $user = User::find($userId);
        return response()->json([
            'status' => 200,
            'data' => $user,
            'message' => 'User profile got it'
        ]);
    }
}
