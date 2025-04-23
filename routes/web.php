<?php

// use Illuminate\Support\Facades\Route;

// Route::view('/', 'index')->name('home_page');
// Route::view('/login', 'auth.login')->name('login_page');
// Route::view('/register/student', 'auth.register-student')->name('register_student');
// Route::view('/register/tutor', 'auth.register-tutor')->name('register_tutor');
// Route::view('/courses', 'courses')->name('course_page');
// Route::view('/courses/detail', 'courses.detail')->name('course_detail'); -->

Route::view('/admin', 'admin.dashboard')->name('admin_page');
Route::view('/admin/courses', 'admin.courses')->name('manage_courses_page');
Route::view('/admin/tutors', 'admin.tutors')->name('manage_tutors_page');
Route::view('/admin/subscription', 'admin.subscription')->name('manage_subscription_page');

// Route::get('/', function () {
//     return view('index');
// });




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Public Pages
Route::view('/', 'index')->name('home_page');
Route::view('/courses', 'courses')->name('course_page');
Route::view('/courses/detail', 'courses.detail')->name('course_detail');

// Auth Pages & Actions
Route::get('/login', [AuthController::class, 'loginPage'])->name('login_page');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register/student', [AuthController::class, 'registerStudent'])->name('register_student');
Route::post('/register/student', [AuthController::class, 'storeStudent'])->name('register_student.store');

Route::get('/register/tutor', [AuthController::class, 'registerTutor'])->name('register_tutor');
Route::post('/register/tutor', [AuthController::class, 'storeTutor'])->name('register_tutor.store');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
