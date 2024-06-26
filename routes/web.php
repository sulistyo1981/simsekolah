<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('contact_home');
});

use App\Http\Controllers\StudentController;
route::get('/students', [StudentController::class, 'index'])->name('students');
route::post('/students', [StudentController::class, 'store']);
route::get('/students/create', [StudentController::class, 'create']);

route::get('/students/{id}/edit', [StudentController::class, 'edit']);
route::put('/students/{id}', [StudentController::class, 'update']);
route::delete('/students/{id}', [StudentController::class, 'destroy']);




