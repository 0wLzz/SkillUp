<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Curriculum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class TutorController extends Controller
{

    public function index()
    {
        $courses = Course::where('tutor_id', Auth::guard('tutor')->user()->id)->get();
        return view('tutor.index', ['ownedCourse' => $courses]);
    }

    public function editCourse(Course $course)
    {
        $categories = Category::all();
        return view('tutor.editCourse', compact(['course', 'categories']));
    }

    public function editProfile()
    {
        $user = Auth::guard('tutor')->user();
        return view('tutor.editProfile', compact('user'));
    }

    public function update_profile(Request $request)
    {
        $user = Auth::guard('tutor')->user();
        $request->validate([
            'image' => 'nullable|mimes:png,jpg|max:5000',
            'portofolio' => 'nullable|mimes:pdf|max:5000',
            'name' => 'string|max:255',
            'email' => [
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'handphone' => 'nullable|digits_between:12,13|numeric|unique:users',
            'dob' => [
                'nullable',
                Rule::date()->beforeToday(),
            ],
            'instance' => 'nullable|string',
            'education' => 'nullable|string'
        ]);

        $path_image = $user->image ?? null;
        if ($request->hasFile('image')) {
            if ($path_image) {
                Storage::disk('public')->delete($user->image);
            }
            $path_image = $request->file('image')->store('profile_picture', 'public');
        }

        $path_portofolio = $user->cv ?? null;
        if ($request->hasFile('portofolio')) {
            if ($path_portofolio) {
                Storage::disk('public')->delete($user->cv);
            }
            $path_portofolio = $request->file('image')->store('profile_picture', 'public');
        }


        $user->update([
            'image' => $path_image,
            'cv' => $path_portofolio,
            'name' => $request->name,
            'email' => $request->email,
            'handphone' => $request->handphone,
            'dob' => $request->dob,
            'instance' => $request->instance,
            'education' => $request->education
        ]);

        return redirect()->back()->with('success', 'Profile berhasil diperbarui!');
    }

    public function curriculumManage(Course $course, Curriculum $curriculum)
    {
        return view('tutor.editCurriculum', compact(['course', 'curriculum']));
    }
}
