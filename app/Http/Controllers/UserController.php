<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Tutor;
use Illuminate\Http\Request;

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
        return view('courses.detail', compact('course'));
    }
}
