<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function registerStudent() {
        return view('auth.register-student');
    }

    public function storeStudent(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
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

    public function registerTutor() {
        return view('auth.register-tutor');
    }

    public function storeTutor(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'portfolio' => 'required|file'
        ]);

        // kamu bisa simpan file portofolio nanti
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('default123'), // atau password generator
            'role' => 'tutor'
        ]);

        return redirect()->route('login_page')->with('success', 'Pendaftaran tutor berhasil!');
    }

    public function loginPage() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home_page');
        }
        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login_page');
    }
}
