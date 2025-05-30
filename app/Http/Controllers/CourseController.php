<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\CoursePurchase;
use App\Models\MaterialVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
            'tutor_id' => 1,
            'rating' => 0,
            'views' => 0
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

        $path = $course->thumbnail ?? null;
        if ($request->hasFile('thumbnail')) {
            if ($path != null) {
                Storage::disk('public')->delete($course->thumbnail);
            }
            $path = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $course->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'price' => $request->price,
            'thumbnail' => $path,
            'category_id' => $request->category,
            'tutor_id' => Auth::guard('tutor')->user->id
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

    // Menampilkan Course Video
    public function course_video(MaterialVideo $video)
    {
        return view('courses.videoPage', compact('video'));
    }

    // Menampilan halaman pembayaran
    public function course_payment(Course $course)
    {
        return view('courses.payment', compact('course'));
    }

    public function buyCourse(Request $request, Course $course)
    {
        if (!$request->payment_method == 'qris') {
            $request->validate([
                'card_number' => 'required|digits_between:13,19',
                'payment_method' => 'required',
                'date' => 'required|date_format:m/y',
                'cvc' => 'required|digits_between:3,4',
                'postal_code' => 'required|string|max:10',
                'payment_method' => 'required'
            ]);
        }

        Auth::guard('web')->user()->purchases()->create([
            'course_id' => $course->id,
        ]);

        return redirect()->route('home_page')->with('show_payment_modal', true);
    }
}
