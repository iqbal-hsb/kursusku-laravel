<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

// 1. Route Halaman Utama (Home)
Route::get('/', [HomeController::class, 'index'])->name('home');

// 2. Route Halaman Form Pendaftaran
Route::get('/pendaftaran', function () {
    $courses = [
        1 => ['name' => 'Web Dasar'],
        2 => ['name' => 'PHP Dasar'],
        3 => ['name' => 'Laravel Dasar'],
    ];

    return view('enrollments.create', compact('courses'));
})->name('enrollments.create');

// 3. Route Proses Submit Form (Validasi)
Route::post('/pendaftaran/preview', function (Request $request) {
    $request->validate([
        'name' => ['required', 'string', 'min:3', 'max:100'],
        'email' => ['required', 'email'],
        'course_id' => ['required', 'integer'],
    ]);

    return back()
        ->with('success', 'Form lolos validasi. Database akan ditambahkan pada pertemuan berikutnya.')
        ->withInput();
})->name('enrollments.preview');

// 4. Route JSON Dummy Ketersediaan Kursi (Untuk Ajax)
Route::get('/courses/{course}/availability', function (int $course) {
    $availability = [
        1 => ['course' => 'Web Dasar',     'remaining' => 12],
        2 => ['course' => 'PHP Dasar',     'remaining' => 8],
        3 => ['course' => 'Laravel Dasar', 'remaining' => 4],
    ];

    abort_unless(isset($availability[$course]), 404);

    return response()->json($availability[$course]);
})->name('courses.availability');