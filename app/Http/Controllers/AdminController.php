<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Course;
use App\Models\Participant;
use App\Models\Enrollment;

class AdminController extends Controller
{
    public function index()
    {
        $totalCourses = class_exists('App\Models\Course') ? Course::count() : 0;
        $totalParticipants = class_exists('App\Models\Participant') ? Participant::count() : 0;
        $totalEnrollments = class_exists('App\Models\Enrollment') ? Enrollment::count() : 0;

        return view('admin.dashboard', compact('totalCourses', 'totalParticipants', 'totalEnrollments'));
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function updateProfile(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|string|min:8|confirmed', 
        ]);

        // 2. Ambil data user yang sedang login
        $user = Auth::user();

        // 3. Update Nama dan Email
        $user->name = $request->name;
        $user->email = $request->email;

        // 4. Update Password (Hanya jika kolom password diisi)
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // 5. Simpan ke Database
        $user->save();

        // 6. Redirect kembali dengan pesan sukses
        return redirect()->route('admin.profile')->with('success', 'Profil berhasil diperbarui!');
    }
}