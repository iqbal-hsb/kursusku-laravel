@extends('layouts.app')

@section('title', 'Pendaftaran Kursus')

@section('content')
<div class="row justify-content-center py-4">
    <div class="col-lg-7">
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="card-header bg-success text-white text-center py-4 border-0">
                <h2 class="h4 mb-1 fw-bold">Formulir Pendaftaran</h2>
                <p class="mb-0 text-white-50">Isi data diri dan pilih kursus impianmu.</p>
            </div>
            <div class="card-body p-4 p-md-5">
                <form method="POST" action="{{ route('enrollments.preview') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                        <input type="text" id="name" name="name"
                               value="{{ old('name') }}"
                               class="form-control form-control-lg bg-light @error('name') is-invalid @enderror"
                               placeholder="Contoh: Muhammad Iqbal"
                               required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label fw-semibold">Alamat Email</label>
                        <input type="email" id="email" name="email"
                               value="{{ old('email') }}"
                               class="form-control form-control-lg bg-light @error('email') is-invalid @enderror"
                               placeholder="nama@email.com"
                               required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="course_id" class="form-label fw-semibold">Pilih Kursus</label>
                        <!-- Tambahan onchange untuk memicu fungsi JS -->
                        <select id="course_id" name="course_id"
                                class="form-select form-select-lg bg-light @error('course_id') is-invalid @enderror"
                                onchange="cekSisaKursi(this.value)"
                                required>
                            <option value="" disabled selected>-- Pilih Kursus yang Tersedia --</option>
                            @foreach ($courses as $id => $course)
                                <option value="{{ $id }}" @selected(old('course_id') == $id)>
                                    {{ $course['name'] }}
                                </option>
                            @endforeach
                        </select>
                        @error('course_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Kotak untuk menampilkan sisa kursi -->
                    <div id="availability" class="alert alert-light border text-center py-3 rounded-3 mb-4">
                        <i class="bi bi-info-circle me-2"></i> Pilih kursus untuk melihat sisa kursi.
                    </div>

                    <button type="submit" class="btn btn-success btn-lg w-100 py-3 fw-bold shadow-sm">
                        Kirim Pendaftaran
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPT JAVASCRIPT FETCH (TANPA JQUERY & VITE) -->
<script>
    function cekSisaKursi(id) {
        const box = document.getElementById('availability');
        
        if (!id) {
            box.className = 'alert alert-light border text-center py-3 rounded-3 mb-4';
            box.innerHTML = '<i class="bi bi-info-circle me-2"></i> Pilih kursus untuk melihat sisa kursi.';
            return;
        }

        // Tampilkan efek loading
        box.className = 'alert alert-light border text-center py-3 rounded-3 mb-4';
        box.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Memuat...';

        // Ambil data JSON dari Route Laravel
        fetch('/courses/' + id + '/availability')
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                // Tampilkan sukses (Hijau)
                box.className = 'alert alert-success border-success text-success text-center py-3 rounded-3 mb-4';
                box.innerHTML = '<strong>' + data.remaining + ' kursi</strong> tersisa untuk <strong>' + data.course + '</strong>.';
            })
            .catch(error => {
                // Tampilkan gagal (Merah)
                console.error('Error:', error);
                box.className = 'alert alert-danger border-danger text-danger text-center py-3 rounded-3 mb-4';
                box.innerHTML = '<i class="bi bi-exclamation-triangle me-2"></i> Gagal memuat data.';
            });
    }
</script>
@endsection