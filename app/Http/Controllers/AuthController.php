<?php

// memulai code "npm run dev"; php artisan serve; php artisan migrate ; 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\TutorRequest;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    // Halaman register student
    public function registerStudent()
    {
        return view('auth.register-student');
    }

    // Simpan data student
    public function storeStudent(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'student'
        ]);

        return redirect()->route('login_page')->with('success', 'Pendaftaran student berhasil!');
    }

    // Halaman register tutor
    public function registerTutor()
    {
        return view('auth.register-tutor');
    }

    // Simpan data tutor
    public function storeTutor(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'portfolio' => 'required|file|mimes:pdf'
        ]);

        // Simpan file portofolio ke storage
        $portfolioPath = $request->file('portfolio')->store('portfolios', 'public');

        TutorRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'portfolio_path' => $portfolioPath,
            'status' => 'pending'
        ]);

        return redirect()->route('login_page')->with('success', 'Pendaftaran tutor berhasil dikirim! Tunggu konfirmasi dari admin.');
    }

    // Halaman login
    public function loginPage()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $guards = ['admin', 'tutor', 'web'];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->attempt($credentials)) {
                $request->session()->regenerate();

                return match ($guard) {
                    'admin' => redirect()->route('admin_page')->with('success', 'Login Berhasil!'),
                    'tutor' => redirect()->route('tutor_dashboard')->with('success', 'Login Berhasil!'),
                    'web'   => redirect()->route('home_page')->with('success', 'Login Berhasil!'),
                    default => redirect()->back()->with(['error' => 'Email atau password salah'])
                };
            }
        }

        return back()->with(['error' => 'Email atau password salah']);
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect()->route('login_page')->with('success', 'Logout berhasil!');
    }
}
