<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('contact', function () {
    return view('contact');
});
use App\Http\Controllers\StudentController;
Route::get('/student', [StudentController::class, 'index']);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/student/create', [StudentController::class, 'create']);
Route::get('/student/{id}/edit', [StudentController::class, 'edit']);
Route::put('/student/{id}/update', [StudentController::class, 'update']);
Route::delete('/student/{id}', [StudentController::class, 'destroy']);