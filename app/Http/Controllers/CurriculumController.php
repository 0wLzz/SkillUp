<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Curriculum;
use App\Models\MaterialVideo;
use App\Models\MaterialWorksheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CurriculumController extends Controller
{
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
    public function edit(Curriculum $Curriculum) {}

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


    public function storeMaterial(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'files' => 'required|mimes:pdf,mp4|max:50000'
        ]);

        $file = $request->file('files');
        $materialPath = $file->store('materials', 'public');

        if (str_contains($file->getMimeType(), 'pdf')) {
            MaterialWorksheet::create([
                'title' => $request->title,
                'curriculum_id' => $request->curriculum_id,
                'description' => $request->description,
                'worksheet' => $materialPath
            ]);
        } else {
            MaterialVideo::create([
                'title' => $request->title,
                'curriculum_id' => $request->curriculum_id,
                'description' => $request->description,
                'video' => $materialPath
            ]);
        }

        return redirect()->back()->with('success', 'Material berhasil ditambahkan!');
    }

    public function updateMaterial(Request $request, string $type, int $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'files' => 'mimes:pdf,mp4|max:50000'
        ]);

        $modelClass = match ($type) {
            'video' => MaterialVideo::class,
            'worksheet' => MaterialWorksheet::class,
            default => abort(404, 'Invalid material type'),
        };

        $material = $modelClass::findOrFail($id);

        $materialPath = ($type == 'video') ? $material->video : $material->worksheet;
        if ($request->hasFile('files')) {
            Storage::disk('public')->delete($materialPath);
            $materialPath = $request->file('files')->store('materials', 'public');
        }

        $material->update([
            'title' => $request->title,
            'description' => $request->description,
            $type => $materialPath
        ]);

        return redirect()->back()->with('success', 'Material berhasil diperbarui!');
    }

    public function deleteMaterial(string $type, int $id)
    {
        $modelClass = match ($type) {
            'video' => MaterialVideo::class,
            'worksheet' => MaterialWorksheet::class,
            default => abort(404, 'Invalid material type'),
        };

        $material = $modelClass::findOrFail($id);
        $material->delete();

        return redirect()->back()->with('success', 'Material berhasil dihapuskan!');
    }
}
