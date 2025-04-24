<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TutorRequest; // ← ✅ Tambahkan ini
use Illuminate\Support\Facades\Mail;
use App\Mail\TutorStatusMail;



class TutorRequestController extends Controller
{
    public function index()
    {
        $tutors = User::where('role', 'tutor')->whereNull('approved_at')->get();
        return view('admin.tutor_requests.index', compact('tutors'));
    }

    public function viewPortfolio($id)
    {
        $tutor = User::findOrFail($id);
        return response()->file(storage_path('app/public/' . $tutor->portfolio));
    }

    public function approve($id)
    {
        $tutor = TutorRequest::findOrFail($id);

        // logika approve tutor
        $tutor->status = 'approved';
        $tutor->save();
    
        // kirim email ke tutor
        Mail::to($tutor->email)->send(new TutorStatusMail('approved', $tutor->name));
    
        return redirect()->back()->with('success', 'Tutor berhasil di-approve dan email dikirim.');
    }

    public function reject($id)
    {
        $tutor = TutorRequest::findOrFail($id);

        $tutor->status = 'rejected';
        $tutor->save();
    
        Mail::to($tutor->email)->send(new TutorStatusMail('rejected', $tutor->name));
    
        return redirect()->back()->with('success', 'Tutor ditolak dan email pemberitahuan dikirim.');
    }
}
