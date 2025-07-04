<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    /**
     * Show admin dashboard
     */
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.dashboard.index', compact('admin'));
    }

    /**
     * Show admin profile
     */
    public function profile()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.dashboard.profile', compact('admin'));
    }

    /**
     * Update admin profile
     */
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . Auth::guard('admin')->id(),
        ]);

        $admin = Auth::guard('admin')->user();
        $admin->update($request->only('name', 'email'));

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully');
    }
}
