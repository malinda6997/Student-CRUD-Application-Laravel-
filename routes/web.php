<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
 // Make sure to import the controller

Route::get('/', function () {
    return view('welcome');
});

// Correct way to define the route
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students/create', [StudentController::class, 'store']);