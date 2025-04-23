<?php

namespace App\Http\Controllers;

use App\Models\TutorRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class TutorRequestController extends Controller
{
    public function index()
    {
        $requests = TutorRequest::where('status', 'pending')->get();
        return view('admin.tutors.requests', compact('requests'));
    }

    public function approve($id)
    {
        $request = TutorRequest::findOrFail($id);
        $request->status = 'approved';
        $request->save();

        // Buat akun user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('default123'),
            'role' => 'tutor'
        ]);

        // Kirim email (opsional – setup config mail)
        // Mail::to($request->email)->send(new TutorApprovedMail($user));

        return back()->with('success', 'Tutor telah disetujui dan akun telah dibuat.');
    }

    public function reject($id)
    {
        $request = TutorRequest::findOrFail($id);
        $request->status = 'rejected';
        $request->save();

        // Kirim email penolakan (opsional)

        return back()->with('success', 'Tutor ditolak.');
    }
}