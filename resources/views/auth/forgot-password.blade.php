@extends('layouts.app')
@section('title', 'Lupa Password')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-5">
                    <h3 class="fw-bold mb-3">Lupa Password?</h3>
                    <p class="text-muted mb-4">Masukkan email Anda untuk menerima link reset password.</p>
                    @if (session('status')) <div class="alert alert-success">{{ session('status') }}</div> @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
                            @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirim Link Reset</button>
                        <div class="text-center mt-3">
                            <a href="{{ route('login') }}" class="text-decoration-none small">Kembali ke Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection