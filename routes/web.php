<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

// Grouped routes for students and teachers
Route::prefix('details')->group(function () {
    Route::get('students', function () {
        return "List of students";
    })->name('students');

    Route::get('teachers', function () {
        return "List of teachers and their details";
    })->name('teachers');
});

// Route parameters with name
Route::get('student/{id}/{rollno}', function ($id, $rollno) {
    return "Student ID: {$id} and Roll No: {$rollno}";
})->name('student.show');

// View route with parameters
Route::get('contactus/{name}/{email}', function ($name, $email) {
    return view('contactus')->with([
        'name' => $name,
        'email' => $email
    ]);
});

// Simple view route
Route::view('contactus', 'contactus', ['name' => 'name', 'email' => 'email']);

// Group all student controller routes
Route::controller(StudentController::class)->group(function () {
    Route::get('student1', 'index');
    Route::get('teacher', 'teacher');
});

// Teacher route with parameters
Route::get('teacher/{id}/{name}', [StudentController::class, 'teacher']);

// Resource route for products
Route::resource('products', ProductController::class);

// Invoke route for home
Route::get('/home', HomeController::class);

Route::get('/teacher', [TeacherController::class, 'index']);

// Employee routes
Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/addEmployee', [EmployeeController::class, 'addEmployee']);
Route::get('/showEmployee/{id}', [EmployeeController::class, 'showEmployee']);
Route::get('/updateEmployee/{id}', [EmployeeController::class, 'updateEmployee']);
Route::get('/deleteEmployee/{id}', [EmployeeController::class, 'deleteEmployee']);

// Fallback route
Route::fallback(function () {
    return "Page not found";
});

use App\Http\Controllers\UsingQueryBuilderController;
// Using Query Builder
Route::get('/addQueryBuilder', [UsingQueryBuilderController::class, 'addQueryBuilder']);
// getData Using Query Builder
Route::get('/getData', [UsingQueryBuilderController::class, 'getData']);
Route::get('/updateData', [UsingQueryBuilderController::class, 'updateData']);
Route::get('/deleteData', [UsingQueryBuilderController::class, 'deleteData']);
