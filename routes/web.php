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


// controller route
use App\Http\Controllers\StudentController;

// without grouping
// Route::get('student1', [StudentController::class, 'index']);
// Route::get('teacher', [StudentController::class, 'teacher']);
// with grouping
// Group all student controller routes
Route::controller(StudentController::class)->group(function () {
    // Route to display student index page
    Route::get('student1', 'index');
    // Route to display teacher page
    Route::get('teacher', 'teacher');
    // Route to display student details
});