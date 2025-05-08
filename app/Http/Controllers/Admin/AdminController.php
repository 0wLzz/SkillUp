<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tutor;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function subscription()
    {
        return view('admin.subscription');
    }

    public function tutor()
    {
        $tutors = Tutor::all();
        return view('admin.tutors', compact('tutors'));
    }

    public function delete_tutor($id)
    {
        $tutor = Tutor::find($id);
        $tutor->delete();
        return redirect()->back();
    }

    public function selectPage()
    {
        $courses = Course::all();
        return view('admin.courses.selectCourse', compact('courses'));
    }

    public function selectFeatured(Course $course)
    {
        $course->is_featured = !$course->is_featured;
        $course->save();

        return redirect()->back();
    }
}
