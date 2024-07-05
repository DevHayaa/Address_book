<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user(); // Fetch authenticated user
            // Debugging: Check $user contents
            // dd($user);
    
            return view('admin.dashboard', [
                'user' => $user // Pass the $user variable to the view
            ]);
        } else {
            // Handle case where user is not authenticated (redirect or show login page)
            return redirect()->route('login');
        }
}
}
