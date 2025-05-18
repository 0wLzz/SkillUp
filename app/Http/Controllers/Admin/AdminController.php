<?php
// memulai code "npm run dev"; php artisan serve;  ; 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tutor;
use App\Models\CoursePurchase;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function subscription()
    {
        $subscriptions = CoursePurchase::with('user', 'course')->get();
        return view('admin.subscription', compact('subscriptions'));
        //return view('admin.subscription');
    }

    public function tutor()
    {
        $tutors = Tutor::all();
        return view('admin.tutors', compact('tutors'));
    }

    public function delete_tutor($id)
    {
        $tutor = Tutor::find($id);
        $tutor->delete();
        return redirect()->back();
    }
}
