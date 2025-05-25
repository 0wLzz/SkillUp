<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CoursePurchase;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = CoursePurchase::with('user', 'course')->get();
        // ⬇️ Ini penting, agar subscription.blade.php dapat akses $subscriptions
        return view('admin.subscriptions.index', compact('subscriptions'));
    }

    public function verify($id)
    {
        $subscription = CoursePurchase::findOrFail($id);
        $subscription->is_verified = true;
        $subscription->save();

        return redirect()->back()->with('success', 'Langganan berhasil diverifikasi.');
    }
}
