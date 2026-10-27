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
                        <select id="course_id" name="course_id"
                                class="form-select form-select-lg bg-light @error('course_id') is-invalid @enderror"
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

                    <!-- Kotak Ajax -->
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
@endsection