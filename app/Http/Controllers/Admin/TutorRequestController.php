<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TutorRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\TutorStatusMail;
use App\Models\Tutor;
use Illuminate\Support\Facades\Hash;

class TutorRequestController extends Controller
{
    public function index()
    {
        $requests = TutorRequest::where('status', 'pending')->get();
        return view('admin.requests', compact('requests'));
    }

    public function viewPortfolio($id)
    {
        $tutor = User::findOrFail($id);
        return response()->file(storage_path('app/public/' . $tutor->portfolio));
    }

    public function approve($id)
    {
        $request = TutorRequest::findOrFail($id);

        // logika approve tutor
        $request->status = 'approved';
        $request->save();
        $password = explode(' ', trim($request->name));

        // kirim email ke tutor
        Mail::to($request->email)->send(new TutorStatusMail('approved', $request->name, ($password[0] . '123'), $request->email));

        Tutor::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($password[0] . '123')
        ]);

        return redirect()->back()->with('success', 'Tutor berhasil di-approve dan email dikirim.');
    }

    public function reject($id)
    {
        $request = TutorRequest::findOrFail($id);

        $request->status = 'rejected';
        $request->save();

        Mail::to($request->email)->send(new TutorStatusMail('rejected', $request->name));

        return redirect()->back()->with('success', 'Tutor ditolak dan email pemberitahuan dikirim.');
    }
}
