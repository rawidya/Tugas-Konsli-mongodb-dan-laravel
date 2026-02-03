<?php

use App\Models\students;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/students',studentsController::class);
Route::resource('/car',CarController::class);