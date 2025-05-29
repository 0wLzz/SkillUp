<?php
// memulai code "npm run dev"; php artisan serve; php artisan migrate  ; tree > struktur.txt

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Tutor;
use App\Models\CoursePurchase;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function dashboard()
    {
        $totalCourse = Course::all()->count();
        $totalTransaction = CoursePurchase::all()->count();
        $totalStudents = User::all()->count();
        $totalTutor = Tutor::all()->count();
        $totalCategories = Category::all()->count();

        return view('admin.dashboard', compact(['totalCourse', 'totalTransaction', 'totalStudents', 'totalCategories', 'totalTutor']));
    }

    public function subscription()
    {
        $subscriptions = CoursePurchase::with('user', 'course')->get();
        return view('admin.subscription', compact('subscriptions'));
        //return view('admin.subscription');
    }

    public function tutor()
    {
        $tutors = Tutor::all();
        return view('admin.tutors', compact('tutors'));
    }

    public function delete_tutor($id)
    {
        $tutor = Tutor::find($id);

        $path = $tutor->image ?? null;
        if ($path != null) {
            Storage::disk('public')->delete($path);
        }

        $tutor->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Tutor!');
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

    public function delete_select_course(Course $course)
    {
        // Delete All Curriculums File and Materials
        $materials = collect();

        foreach ($course->curriculums as $curriculum) {
            $materials = $materials->concat($curriculum->getAllMaterials());
        }

        foreach ($materials as $material) {
            if ($material->getTable() == 'material_videos') {
                $path = $material->video ?? null;
                ($path != null) ? Storage::disk('public')->delete($material->video) : '';
            } else {
                $path = $material->worksheet ?? null;
                ($path != null) ? Storage::disk('public')->delete($material->worksheet) : '';
            }
        }

        $course->delete();
        return redirect()->back()->with('success', 'Course berhasil dihapus!');
    }
}
