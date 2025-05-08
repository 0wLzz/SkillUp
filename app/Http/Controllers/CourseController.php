<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Menampilkan semua course
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    // Form tambah course
    public function create()
    {
        return view('admin.courses.create');
    }

    // Simpan course baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'desscription' => 'nullable|string',
        ]);

        Course::create([
            'title' => $request->title,
            'description' => $request->subtitle,
            'category_id' => 1,
            'tutor_id' => 1
        ]);

        return redirect()->back()->with('success', 'Course berhasil ditambahkan!');
    }

    // Form edit course
    public function edit(Course $course)
    {
        $categories = Category::all();
        return view('tutor.editCourse', compact(['course', 'categories']));
    }

    // Update data course
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg|max:20480',
            'title' => 'required|string',
            'subtitle' => 'nullable|string',
            'description' => 'string',
            'price' => 'min:100000|integer',
            'benefits' => 'required|array|min:1',
            'benefits.*' => 'required|string|max:255',
        ]);

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('thumbnails', 'public');
            $course->thumbnail = $path;
        }

        $course->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => 1,
            'tutor_id' => 1
        ]);

        // Get the Existing Benefits 
        $existingBenefits = $course->benefits()->pluck('benefit');
        // Compare the existing benefits and new benefits
        $toDelete = $existingBenefits->diff($request->benefits);
        // Remove all excluded benefit from the new benefits
        $course->benefits()->whereIn('benefit', $toDelete)->delete();

        foreach ($request->benefits as $courseBenefit) {
            $course->benefits()->updateOrCreate([
                'benefit' => $courseBenefit
            ]);
        }

        return redirect()->route('tutor_dashboard')->with('success', 'Course berhasil diperbarui!');
    }

    // Hapus course
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->back()->with('success', 'Course berhasil dihapus!');
    }
}
