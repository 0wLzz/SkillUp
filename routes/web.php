<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register/student', 'auth.register-student')->name('register_student');
Route::view('/register/tutor', 'auth.register-tutor')->name('register_tutor');

// Route::get('/', function () {
//     return view('index');
// });
