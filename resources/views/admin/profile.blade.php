@extends('layouts.app')

@section('title', 'Profil Administrator - KursusKu')

@section('content')
<div class="container py-4">
    
    {{-- Header Halaman --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Profil Saya</h2>
            <p class="text-secondary mb-0">Kelola informasi akun dan data diri Anda.</p>
        </div>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i> Kembali ke Dashboard
        </a>
    </div>

    <div class="row g-4">
        {{-- Kolom Kiri: Kartu Identitas --}}
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 text-center">
                <div class="card-body p-5">
                    {{-- Avatar Inisial --}}
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                         style="width: 100px; height: 100px;">
                        <i class="bi bi-person-fill" style="font-size: 3rem;"></i>
                    </div>
                    
                    <h4 class="fw-bold mb-1">{{ Auth::user()->name }}</h4>
                    <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill mb-3">
                        Administrator
                    </span>
                    
                    <hr class="my-4 text-muted">
                    
                    <div class="text-start small">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-envelope text-secondary me-3 fs-5"></i>
                            <div>
                                <span class="text-secondary d-block">Email</span>
                                <span class="fw-semibold">{{ Auth::user()->email }}</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-check text-secondary me-3 fs-5"></i>
                            <div>
                                <span class="text-secondary d-block">Bergabung Sejak</span>
                                <span class="fw-semibold">{{ Auth::user()->created_at->format('d F Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kolom Kanan: Form Edit Profil --}}
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-header bg-white border-0 pt-4 px-4 pb-0">
                    <h5 class="fw-bold mb-0">Informasi Akun</h5>
                </div>
                <div class="card-body p-4">
                    
                    {{-- Form Update Profil --}}
                    <form action="{{ route('admin.profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row g-3">
                            {{-- Input Nama --}}
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-semibold text-secondary">Nama Lengkap</label>
                                <input type="text" class="form-control form-control-lg bg-light @error('name') is-invalid @enderror" 
                                       id="name" name="name" value="{{ old('name', Auth::user()->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Input Email --}}
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold text-secondary">Alamat Email</label>
                                <input type="email" class="form-control form-control-lg bg-light @error('email') is-invalid @enderror" 
                                       id="email" name="email" value="{{ old('email', Auth::user()->email) }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Input Password Baru (Opsional) --}}
                            <div class="col-12 mt-4">
                                <label for="password" class="form-label fw-semibold text-secondary">Password Baru (Opsional)</label>
                                <input type="password" class="form-control form-control-lg bg-light @error('password') is-invalid @enderror" 
                                       id="password" name="password" placeholder="Kosongkan jika tidak ingin mengubah password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="form-text text-muted small mt-1">
                                    Minimal 8 karakter. Biarkan kosong jika tidak ada perubahan.
                                </div>
                            </div>
                            
                            {{-- Konfirmasi Password Baru --}}
                            <div class="col-12 mt-3">
                                <label for="password_confirmation" class="form-label fw-semibold text-secondary">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control form-control-lg bg-light" 
                                       id="password_confirmation" name="password_confirmation" placeholder="Ulangi password baru">
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg px-4 shadow-sm">
                                    <i class="bi bi-save me-2"></i> Simpan Perubahan
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection