<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Grouped routes for students and teachers
Route::prefix('details')->group(function () {
    Route::get('students', function () {
        return("List of students");
    })->name('students');

    Route::get('teachers', function () {
        return ("List of teachers and their details");
    })->name('teachers');
});

// Route parameters
Route::get('student/{id}/{rollno}', function ($id, $rollno) {
    return "Student ID: {$id} and Roll No: {$rollno}";
});

// fallback route
Route::fallback(function () {
    return "Page not found";
});

// Route name
Route::get('student/{id}/{rollno}', function ($id, $rollno) {
    return "Student ID: {$id} and Roll No: {$rollno}";
})->name('student.show');

// view route
Route::get('contactus/{name}/{email}', function ($name,$email) {
    // $name = "Eibrahim";
    // $email = "Eibrahim@gmail.com";
    // return view('contactus', compact('name', 'email'));
    // Method 1: Using with() method
    return view('contactus')->with([
        'name' => $name,
        'email' => $email
    ]);

    // Method 2: Using array as second parameter
    return view('contactus', [
        'name' => $name,
        'email' => $email
    ]);

    // Method 3: Using compact() function
    return view('contactus', compact('name', 'email'));



});

// route view
Route::view('contactus', 'contactus', ['name' => 'name', 'email' => 'email']);
