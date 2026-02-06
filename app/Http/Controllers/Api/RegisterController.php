<?php

namespace App\Http\Controllers\Api;
use App\Models\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\validator;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validator = validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        $user = user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        if($user){
            return response()->json([
                'success' => true,
                'data' => $user,
            ],201);
    }
}
}
