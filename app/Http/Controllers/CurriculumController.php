<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function index()
    {
        // 
    }

    // Form tambah curriculum
    public function create()
    {
        //
    }

    // Simpan curriculum baru
    public function store(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Curriculum::create([
            'title' => $request->title,
            'tutor_id' => 1,
            'course_id' => $course->id
        ]);

        return redirect()->back()->with('success', 'Curriculum berhasil ditambahkan!');
    }

    // Form edit curriculum
    public function edit(Curriculum $Curriculum)
    {
        //
    }

    // Update data curriculum
    public function update(Request $request, Curriculum $Curriculum)
    {
        //
    }

    // Hapus Curriculum
    public function destroy(Curriculum $c)
    {
        $c->delete();
        return redirect()->back()->with('success', 'Curriculum berhasil dihapus!');
    }
}
