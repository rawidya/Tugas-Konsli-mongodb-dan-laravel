<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        auth()->guard('api')->logout();

        return response()->json([
            'success' => true,
            'message' => 'Dadahhh! Kamu sudah keluar.',
        ], 200);
    }
}
