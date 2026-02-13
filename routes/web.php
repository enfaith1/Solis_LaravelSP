<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;
// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// OLD
// Student List Page 
// THIS IS THE http://127.0.0.1:8000/students
// Route::get('/students', function () {
//     return view('students.index');
// })->name('students.index');


Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// OLD
// Add Student Page
// Route::get('/students/create', function () {
//     return view('students.create');
// })->name('students.create');

// GET, TO CREATE
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// POST, TO STORE
Route::post('/students', [StudentController::class, 'store'])->name('students.store');


// View Student Page
Route::get('/students/{id}', function ($id) {
    return view('students.show', ['id' => $id]);
})->name('students.show');

// Edit Student Page
Route::get('/students/{id}/edit', function ($id) {
    return view('students.edit', ['id' => $id]);
})->name('students.edit');