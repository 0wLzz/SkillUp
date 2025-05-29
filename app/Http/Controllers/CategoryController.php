<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    // Menampilkan semua course
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    // Form tambah course
    public function create()
    {
        return view('admin.category.create');
    }

    // Simpan course baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('category.index')->with('success', 'Category berhasil ditambahkan!');
    }

    // Update data course
    public function update(Request $request, Category $category)
    {
        // dd($category);
        $request->validate([
            'name' => 'required',
        ]);

        $data = $request->only('name');
        $category->update($data);

        return redirect()->route('category.index')->with('success', 'Category berhasil diperbarui!');
    }

    // Hapus course
    public function destroy(Category $category)
    {
        $courses = $category->courses;
        $materials = collect();

        foreach ($courses as $course) {
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
        }

        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category berhasil dihapus!');
    }
}
