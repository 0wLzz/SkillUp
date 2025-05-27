<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CoursePurchase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
        $tutors = Tutor::limit(5)->get();
        $courses = Course::all();
        return view('index', compact(['courses', 'tutors']));
    }
    public function course_page()
    {
        $courses = Course::all();
        return view('courses', compact('courses'));
    }

    public function course_detail(Course $course)
    {
        $is_purchased = CoursePurchase::where('course_id', $course->id)
            ->where('user_id', Auth::guard('web')->user()->id)
            ->exists();


        return view('courses.detail', compact(['course', 'is_purchased']));
    }

    public function edit_profile()
    {
        $user = Auth::guard('web')->user();
        return view('users.editProfile', compact('user'));
    }
}
