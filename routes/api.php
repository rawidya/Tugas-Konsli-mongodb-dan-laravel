<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\StudentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\Api\LogoutController;

Route::post('/register', RegisterController::class);
Route::post('/login', LoginController::class);

Route::middleware('auth:api')->group(function () {
    Route::post('/logout', LogoutController::class);
    Route::get('/students', [StudentsController::class, 'index']);
    Route::post('/students', [StudentsController::class, 'store']);
    Route::get('/students/{id}', [StudentsController::class, 'show']);
    Route::put('/students/{id}', [StudentsController::class, 'update']);
    Route::delete('/students/{id}', [StudentsController::class, 'destroy']);
});
