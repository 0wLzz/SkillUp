<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoursePurchase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index()
    {
        $studentId = Auth::guard('student')->id();
        $purchases = CoursePurchase::where('user_id', $studentId)->with('course')->get();

        return view('student.purchase', compact('purchases'));
    }

    public function uploadPayment(Request $request, $id)
    {
        $request->validate([
            'payment_proof' => 'required|image|max:2048'
        ]);

        $purchase = CoursePurchase::where('id', $id)
            ->where('user_id', Auth::guard('student')->id())
            ->whereNull('payment_proof') // hanya upload sekali
            ->firstOrFail();

        $path = $request->file('payment_proof')->store('payment_proofs', 'public');
        $purchase->payment_proof = $path;
        $purchase->save();

        return back()->with('success', 'Bukti pembayaran berhasil diupload.');
    }
}
