<?php

// memulai code "npm run dev"; php artisan serve; php artisan migrate ; 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\TutorRequest;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

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
        $request->validate(
            [
                'name' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|confirmed',
            ],
            [
                'name.regex' => 'The :attribute must not contain symbols.'
            ]
        );

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
        $request->validate(
            [
                'name' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required',
                'portfolio' => 'required|file|mimes:pdf'
            ],
            [
                'name.regex' => 'The :attribute must not contain symbols.'
            ]
        );

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
            if (Auth::guard($guard)->attempt($credentials, $request->remember)) {
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

    public function forgotPasswordPage()
    {
        return view('auth.forgot-password');
    }

    function handleForgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::ResetLinkSent
            ? back()->with('success', __($status))
            : back()->with('error', __($status));
    }

    function resetPassword(string $token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    function updatePassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PasswordReset
            ? redirect()->route('login')->with('success', __($status))
            : back()->with('error', __($status));
    }
}
