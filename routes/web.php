<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Admin\TutorRequestController;


// admin
Route::view('/admin', 'admin.dashboard')->name('admin_page');
//Route::view('/admin/courses', 'admin.courses')->name('manage_courses_page');
Route::view('/admin/tutors', 'admin.tutors')->name('manage_tutors_page');
Route::view('/admin/subscription', 'admin.subscription')->name('manage_subscription_page');


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



Route::resource('/admin/courses', CourseController::class);

// untuk request tutor
Route::get('/admin/tutors/requests', [TutorRequestController::class, 'index'])->name('tutor_requests.index');
Route::put('/admin/tutors/requests/{id}/approve', [TutorRequestController::class, 'approve'])->name('tutor_requests.approve');
Route::put('/admin/tutors/requests/{id}/reject', [TutorRequestController::class, 'reject'])->name('tutor_requests.reject');

