<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class TutorController extends Controller
{

    public function index()
    {
        $course = Course::all();
        return view('tutor.index', ['ownedCourse' => $course]);
    }

    public function editCourse(Course $course)
    {
        $categories = Category::all();
        return view('tutor.editCourse', compact(['course', 'categories']));
    }

    public function editProdfile()
    {
        return view('tutor.editProfile');
    }
}
