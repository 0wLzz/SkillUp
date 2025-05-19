<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Admin\TutorRequestController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\EarningController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\StudentController;



// Tutor
Route::get('/tutor', [TutorController::class, 'index'])->name('tutor_dashboard');
Route::get('/tutor/edit/', [TutorController::class, 'edit'])->name('tutor_edit');

// Admin
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin_page');
Route::get('/admin/subscription', [AdminController::class, 'subscription'])->name('manage_subscription_page');
Route::get('/admin/tutors', [AdminController::class, 'tutor'])->name('manage_tutors_page');
Route::delete('/admin/tutors/delete/{id}', [AdminController::class, 'delete_tutor'])->name('delete_tutor');
Route::resource('/admin/courses', CourseController::class);
Route::resource('/admin/category', CategoryController::class);

// Request tutor
Route::get('/admin/tutors/requests', [TutorRequestController::class, 'index'])->name('tutor_requests.index');
Route::put('/admin/tutors/requests/{id}/approve', [TutorRequestController::class, 'approve'])->name('tutor_requests.approve');
Route::put('/admin/tutors/requests/{id}/reject', [TutorRequestController::class, 'reject'])->name('tutor_requests.reject');

// Public Pages
Route::view('/', 'index')->name('home_page');
Route::view('/courses', 'courses')->name('course_page');
Route::view('/courses/detail', 'courses.detail')->name('course_detail');
Route::view('/courses/payment', 'courses.payment')->name('course_payment');
Route::view('/courses/video', 'courses.videoPage')->name('course_video');

// Auth Pages & Actions
Route::get('/login', [AuthController::class, 'loginPage'])->name('login_page');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//  Register Student
Route::get('/register/student', [AuthController::class, 'registerStudent'])->name('register_student');
Route::post('/register/student', [AuthController::class, 'storeStudent'])->name('register_student.store');

// Register Tutor
Route::get('/register/tutor', [AuthController::class, 'registerTutor'])->name('register_tutor');
Route::post('/register/tutor', [AuthController::class, 'storeTutor'])->name('register_tutor.store');


Route::get('/earnings', [EarningController::class, 'index'])->middleware('auth')->name('earnings');
Route::get('/earnings-data/{year}', [EarningController::class, 'getEarningsData']);

// Student
Route::middleware(['auth:student'])->group(function () {
    Route::get('/student/purchase', [StudentController::class, 'index'])->name('student.purchases');
    Route::post('/student/purchase/{id}/upload', [StudentController::class, 'uploadPayment'])->name('student.uploadPayment');
});