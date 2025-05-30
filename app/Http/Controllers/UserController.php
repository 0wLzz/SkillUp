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

    public function subscribe()
    {
        return redirect()->back()->with('success', 'You have successfully Subscribed!');
    }

    public function course_page(Request $request)
    {
        $query = Course::orderBy('created_at', 'DESC');

        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        switch ($request->filter) {
            case 'popular':
                $query->orderBy('views', 'desc'); // assuming a 'views' column
                break;
            case 'newest':
                $query->orderBy('created_at', 'desc');
                break;
            case 'highest_rated':
                $query->orderBy('rating', 'desc'); // assuming a 'rating' column
                break;
        }

        $courses = $query->paginate(8);
        $featured = Course::where('is_featured', true)->take(6)->get();

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

        $tutor = $course->tutor;

        return view('courses.detail', compact(['course', 'is_purchased', 'tutor']));
    }

    public function tutor_detail(Tutor $tutor)
    {
        $ownedCourse = Course::where('tutor_id', $tutor->id)->get();

        return view('users.tutorDetails', compact(['tutor', 'ownedCourse']));
    }

    public function edit_profile()
    {
        $user = Auth::guard('web')->user();
        $ownedCourse = CoursePurchase::with('course')
            ->where('user_id', $user->id)
            ->get()
            ->pluck('course');
        return view('users.editProfile', compact(['user', 'ownedCourse']));
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
