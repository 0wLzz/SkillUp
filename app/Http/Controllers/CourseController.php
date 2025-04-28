<?php

namespace App\Http\Controllers;

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
            'subtitle' => 'nullable|string',
            'teacher' => 'nullable|string',

            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg|max:20480',
        ]);

        $path = null;
        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        Course::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'teacher' => $request->teacher,

            'thumbnail' => $path,
        ]);

        return redirect()->route('courses.index')->with('success', 'Course berhasil ditambahkan!');
    }

    // Form edit course
    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    // Update data course
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string',
            'subtitle' => 'nullable|string',
            'teacher' => 'nullable|string',

            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $data = $request->only('title', 'subtitle', 'teacher', 'students', 'videos');

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('thumbnails', 'public');
            $course->thumbnail = $path;
        }

        $course->update($request->only('title', 'subtitle', 'teacher', 'students', 'videos'));

        return redirect()->route('courses.index')->with('success', 'Course berhasil diperbarui!');
    }

    // Hapus course
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course berhasil dihapus!');
    }
}
