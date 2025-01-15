<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Admin\AdminGradeController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminDepartmentController;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman Umum
Route::get('/home', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

// Halaman Siswa
Route::prefix('students')->name('student.')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/{student}', [StudentController::class, 'show'])->name('show');
});

// Halaman Grade
Route::prefix('grades')->name('grade.')->group(function () {
    Route::get('/', [GradeController::class, 'index'])->name('index');
});

// Halaman Department
Route::prefix('departments')->name('department.')->group(function () {
    Route::get('/', [DepartmentController::class, 'index'])->name('index');
});

// Rute Admin
Route::prefix('admin')->name('admin.')->group(function () {

    // Halaman Admin Grade
    Route::prefix('grades')->name('grades.')->group(function () {
        Route::get('/', [AdminGradeController::class, 'index'])->name('index');
    });

    // Halaman Admin Department
    Route::prefix('departments')->name('departments.')->group(function () {
        Route::get('/', [AdminDepartmentController::class, 'index'])->name('index');
    });

    // Halaman Admin Student (Menggunakan Resource)
    Route::resource('students', AdminStudentController::class);

    // Halaman Admin Grade (Menggunakan Resource)
    Route::resource('grades', AdminGradeController::class);

    // Halaman Admin Department (Menggunakan Resource)
    Route::resource('departments', AdminDepartmentController::class);
});
