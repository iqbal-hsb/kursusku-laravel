@extends('layouts.app')

@section('title', 'Beranda - KursusKu')

@section('content')
<div class="row align-items-center py-5 g-5">
    <div class="col-lg-6">
        <span class="badge bg-success bg-opacity-10 text-success mb-3 px-3 py-2 rounded-pill fw-semibold">
            ✨ Platform Belajar Terbaik
        </span>
        <h1 class="display-4 fw-bold mb-4" style="letter-spacing: -1.5px; line-height: 1.2;">
            Kuasai Teknologi Web <br>
            <span class="text-success">Bersama KursusKu</span>
        </h1>
        <p class="lead text-secondary mb-5">
            Mulai perjalananmu dari HTML dasar hingga Laravel fundamental. Pilih kursus, cek ketersediaan kursi secara *real-time*, dan daftar dalam hitungan detik.
        </p>
        <div class="d-flex gap-3">
            <a href="{{ route('enrollments.create') }}" class="btn btn-success btn-lg px-4 py-2 shadow-sm">
                Daftar Sekarang
            </a>
            <a href="#" class="btn btn-outline-secondary btn-lg px-4 py-2">
                Lihat Kurikulum
            </a>
        </div>
    </div>
    <div class="col-lg-6 text-center">
        <!-- Gunakan gambar ilustrasi jika ada, atau kotak dekoratif -->
        <div class="bg-success bg-opacity-10 p-5 rounded-4 shadow-sm d-inline-block w-100" style="border: 1px dashed #198754;">
            <h3 class="text-success mb-3">💻</h3>
            <p class="text-secondary mb-0">Tempat Ilustrasi Hero KursusKu</p>
        </div>
    </div>
</div>
@endsection