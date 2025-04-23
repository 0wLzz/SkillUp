<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
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
            'portfolio' => 'required|file'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('default123'), // default password
            'role' => 'tutor'
        ]);

        return redirect()->route('login_page')->with('success', 'Pendaftaran tutor berhasil!');
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

        if (Auth::attempt($credentials)) {
            return redirect()->route('home_page');
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    // Proses logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login_page');
    }
}
