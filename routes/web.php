<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// =====================================================================
// ROUTE PUBLIK (Bisa diakses tanpa login)
// =====================================================================

// 1. Route Home (Menampilkan Beranda & Katalog)
Route::get('/', function () {
    $courses = Course::all(); 
    return view('home', compact('courses'));
})->name('home');

// 2. Route JSON Ketersediaan Kursi (Ajax)
Route::get('/courses/{course}/availability', function (int $course) {
    $courseData = Course::findOrFail($course);
    return response()->json([
        'course' => $courseData->name,
        'remaining' => $courseData->quota 
    ]);
})->name('courses.availability');

// 3. Route Autentikasi (Login, Logout, Lupa Password)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');


// =====================================================================
// ROUTE TERPROTEKSI (Wajib Login)
// =====================================================================
Route::middleware('auth')->group(function () {

    // A. Admin Dashboard & Profil
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    
    // Route untuk memproses simpan perubahan profil
    Route::put('/admin/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');

    // B. CRUD Kursus
    Route::resource('courses', CourseController::class);

    // C. Relasi Pendaftaran
    Route::resource('enrollments', EnrollmentController::class)->only(['index', 'create', 'store']);

});