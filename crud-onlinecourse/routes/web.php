<?php

use App\Http\Controllers\OnlinecourseController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return redirect('home');
});

// Hapus middleware auth di bawah ini
Route::get('/home', function () {
    return view('home');
})->name('home');

// Hapus pengelompokan middleware auth
Route::resource('onlinecourse', OnlinecourseController::class);
Route::resource('students', StudentController::class);

