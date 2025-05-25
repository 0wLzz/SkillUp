<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Curriculum;
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

    public function editProfile()
    {
        return view('tutor.editProfile');
    }

    public function curriculumManage(Course $course, Curriculum $curriculum)
    {
        return view('tutor.editCurriculum', compact(['course', 'curriculum']));
    }
}
