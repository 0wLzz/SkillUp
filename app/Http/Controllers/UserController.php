<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CoursePurchase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $tutors = Tutor::limit(5)->get();
        $courses = Course::all();
        return view('index', compact(['courses', 'tutors']));
    }

    public function course_page(Request $request)
    {
        $courses = Course::orderBy('created_at', 'DESC')->get();
        $featured = Course::where('is_featured', true)->get();

        if ($request->filled('search')) {
            $courses = $courses->where('title', 'like', '%' . $request->search . '%');
        }

        return view('courses', compact(['courses', 'featured']));
    }

    public function course_detail(Course $course)
    {
        $is_purchased = false;
        if (Auth::user()) {
            $is_purchased = CoursePurchase::where('course_id', $course->id)
                ->where('user_id', Auth::guard('web')->user()->id)
                ->exists();
        }

        return view('courses.detail', compact(['course', 'is_purchased']));
    }

    public function tutor_detail(Tutor $tutor)
    {
        $ownedCourse

        return view('users.tutorDetails', compact(['tutor', 'ownedCourse']));
    }

    public function edit_profile()
    {
        $user = Auth::guard('web')->user();
        return view('users.editProfile', compact('user'));
    }

    public function update_profile(Request $request)
    {
        $user = Auth::guard('web')->user();
        $request->validate([
            'image' => 'mimes:png,jpg|max:5000',
            'name' => 'string|max:255',
            'email' => [
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'handphone' => 'digits_between:12,13|numeric|unique:users',
            'dob' => [
                Rule::date()->beforeToday(),
            ]
        ]);

        $path = $user->image ?? null;
        if ($request->hasFile('image')) {
            if ($path) {
                Storage::disk('public')->delete($user->image);
            }
            $path = $request->file('image')->store('profile_picture', 'public');
        }


        $user->update([
            'image' => $path,
            'name' => $request->name,
            'email' => $request->email,
            'handphone' => $request->handphone,
            'dob' => $request->dob
        ]);

        return redirect()->back()->with('success', 'Profile berhasil diperbarui!');
    }
}
