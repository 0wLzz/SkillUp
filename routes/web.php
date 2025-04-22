<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home_page');
Route::view('/login', 'auth.login')->name('login_page');
Route::view('/register/student', 'auth.register-student')->name('register_student');
Route::view('/register/tutor', 'auth.register-tutor')->name('register_tutor');
Route::view('/courses', 'courses')->name('course_page');
Route::view('/courses/detail', 'courses.detail')->name('course_detail');

Route::view('/admin', 'admin.dashboard')->name('admin_page');
Route::view('/admin/courses', 'admin.courses')->name('manage_courses_page');
Route::view('/admin/tutors', 'admin.tutors')->name('manage_tutors_page');
Route::view('/admin/subscription', 'admin.subscription')->name('manage_subscription_page');

// Route::get('/', function () {
//     return view('index');
// });
