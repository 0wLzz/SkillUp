<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\CoursePurchase;
use Carbon\Carbon;

class EarningController extends Controller
{
    public function index()
    {
        //$user = Auth::user(); // versi global helper
        
        $user = Auth::user();  // versi namespace

        $purchases = CoursePurchase::with('course')->get();

        $monthlyEarnings = array_fill(1, 12, 0);
        $yearlyEarnings = [];

        $thisYear = now()->year;

        foreach ($purchases as $purchase) {
            $year = $purchase->created_at->year;
            $month = $purchase->created_at->month;

            $price = $purchase->price;
            $isOwned = $purchase->course->tutor_id === $user->id;

            // Tutor: hanya dari course miliknya
            if ($user->tutor && $isOwned) {
                $monthlyEarnings[$month] += $price * 0.95;
                $yearlyEarnings[$year] = ($yearlyEarnings[$year] ?? 0) + $price * 0.95;
            }

            // Admin: dari semua pembelian
            if ($user->admin) {
                $monthlyEarnings[$month] += $price * 0.05;
                $yearlyEarnings[$year] = ($yearlyEarnings[$year] ?? 0) + $price * 0.05;
            }
        }

        return view('earnings.index', [
            'monthlyEarnings' => $monthlyEarnings,
            'yearlyEarnings' => $yearlyEarnings,
        ]);
    }
    public function getEarningsData($year)
    {
        $monthlyEarnings = array_fill(1, 12, 0);
        $yearlyEarnings = [];

        // Ambil pembelian berdasarkan tahun yang dipilih
        $purchases = CoursePurchase::whereYear('created_at', $year)->get();

        // Loop untuk menghitung pendapatan bulanan dan tahunan
        foreach ($purchases as $purchase) {
            $month = $purchase->created_at->month;
            $price = $purchase->price;

            // Cek apakah user adalah tutor dan apakah course miliknya
            if ($purchase->course->tutor_id === auth()->user()->id) {
                $monthlyEarnings[$month] += $price * 0.95;
                $yearlyEarnings[$year] = ($yearlyEarnings[$year] ?? 0) + $price * 0.95;
            } else {
                // Jika admin, dapat 5% dari semua transaksi
                $monthlyEarnings[$month] += $price * 0.05;
                $yearlyEarnings[$year] = ($yearlyEarnings[$year] ?? 0) + $price * 0.05;
            }
        }

        // Kembalikan data dalam format JSON untuk AJAX
        return response()->json([
            'monthlyEarnings' => $monthlyEarnings,
            'yearlyEarnings' => $yearlyEarnings,
        ]);
    }

}
