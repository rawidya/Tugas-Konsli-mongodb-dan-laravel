<?php

use App\Models\students;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/car',CarController::class);