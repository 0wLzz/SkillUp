<?php
// memulai code "npm run dev"; php artisan serve;  ; 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tutor;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function subscription()
    {
        return view('admin.subscription');
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
