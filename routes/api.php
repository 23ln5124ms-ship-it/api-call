<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

// GET - fetch all students
Route::get('/students', [StudentsController::class, 'index']);

// GET - fetch one student by ID
Route::get('/students/{id}', [StudentsController::class, 'show']);

// POST - create a new student
Route::post('/students', [StudentsController::class, 'store']);

// PUT - update an existing student by ID
Route::put('/students/{id}', [StudentsController::class, 'update']);

// PATCH - partial update of an existing student by ID
Route::patch('/students/{id}', [StudentsController::class, 'patch']);

// DELETE - delete all students
Route::delete('/students', [StudentsController::class, 'destroyAll']);

// DELETE - delete one student by ID
Route::delete('/students/{id}', [StudentsController::class, 'destroy']);