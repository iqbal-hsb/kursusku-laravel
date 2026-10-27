@extends('layouts.app')

@section('title', 'Beranda - KursusKu')

@section('content')
<!-- Hero Section -->
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
            Mulai perjalananmu dari HTML dasar hingga Laravel fundamental. Pilih kursus, cek ketersediaan kursi secara <em>real-time</em>, dan daftar dalam hitungan detik.
        </p>
        <div class="d-flex gap-3">
            <a href="{{ route('enrollments.create') }}" class="btn btn-success btn-lg px-4 py-2 shadow-sm">
                Daftar Sekarang
            </a>
            <a href="#keunggulan" class="btn btn-outline-secondary btn-lg px-4 py-2">
                Lihat Keunggulan
            </a>
        </div>
    </div>
    <div class="col-lg-6 text-center">
        <!-- Memanggil Gambar Ilustrasi SVG -->
        <img src="{{ asset('images/ilustrasi.svg') }}" alt="Ilustrasi Belajar KursusKu" class="img-fluid" style="max-height: 450px;">
    </div>
</div>

<!-- Section Keunggulan -->
<div id="keunggulan" class="row g-4 mt-5 mb-5">
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm text-center p-4">
            <div class="card-body">
                <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex justify-content-center align-items-center mb-3" style="width: 70px; height: 70px;">
                    <i class="bi bi-lightning-charge text-success fs-2"></i>
                </div>
                <h5 class="fw-bold">Belajar Cepat</h5>
                <p class="text-muted small mb-0">Materi disusun ringkas, padat, dan langsung ke inti pembelajaran.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm text-center p-4">
            <div class="card-body">
                <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex justify-content-center align-items-center mb-3" style="width: 70px; height: 70px;">
                    <i class="bi bi-people text-success fs-2"></i>
                </div>
                <h5 class="fw-bold">Komunitas Aktif</h5>
                <p class="text-muted small mb-0">Diskusi bersama mentor dan mahasiswa lain se-Indonesia.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm text-center p-4">
            <div class="card-body">
                <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex justify-content-center align-items-center mb-3" style="width: 70px; height: 70px;">
                    <i class="bi bi-patch-check text-success fs-2"></i>
                </div>
                <h5 class="fw-bold">Bersertifikat</h5>
                <p class="text-muted small mb-0">Dapatkan sertifikat resmi setelah menyelesaikan kursus.</p>
            </div>
        </div>
    </div>
</div>
@endsection