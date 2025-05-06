<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('index', compact('courses'));
    }
    public function course_page()
    {
        $courses = Course::all();
        return view('courses', compact('courses'));
    }

    public function course_detail(Course $course)
    {
        return view('courses.detail', compact('course'));
    }
}
