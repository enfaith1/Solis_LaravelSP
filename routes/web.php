<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Student List Page
Route::get('/students', function () {
    return view('students.index');
})->name('students.index');

// Add Student Page
Route::get('/students/create', function () {
    return view('students.create');
})->name('students.create');

// View Student Page
Route::get('/students/{id}', function ($id) {
    return view('students.show', ['id' => $id]);
})->name('students.show');

// Edit Student Page
Route::get('/students/{id}/edit', function ($id) {
    return view('students.edit', ['id' => $id]);
})->name('students.edit');