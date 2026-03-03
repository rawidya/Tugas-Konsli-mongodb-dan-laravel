<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\validator;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:8',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $credentials = $request->only('email', 'password');

        if (! $token = auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'Yahahahaaahaha user atau pw mu salah',
            ], 401);
        }

        return response()->json([
            'success' => true,
            'message' => 'Kok bisa yaaa?',
            'user' => auth()->guard('api')->user(),
            'token' => $token,
        ], 200);
    }
}
