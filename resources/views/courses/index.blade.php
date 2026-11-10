@extends('layouts.app')

@section('title', 'Daftar Kursus')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h1 class="h3 mb-1">Daftar Kursus</h1>
            <p class="text-muted mb-0">Data diambil dari MySQL melalui Eloquent.</p>
        </div>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">
            + Tambah Kursus
        </a>
    </div>

    {{-- Pesan Sukses (Flash Message) --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0 align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Biaya</th>
                            <th>Kuota</th>
                            <th>Mulai</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th> {{-- Header Aksi --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($courses as $course)
                            <tr>
                                <td>{{ $course->code }}</td>
                                <td>{{ $course->name }}</td>
                                <td>Rp {{ number_format($course->fee, 0, ',', '.') }}</td>
                                <td>{{ $course->quota }}</td>
                                <td>{{ $course->start_date->format('d/m/Y') }}</td>
                                <td>
                                    {{-- Memberikan warna badge sesuai status --}}
                                    @if($course->status === 'open')
                                        <span class="badge bg-success">Open</span>
                                    @elseif($course->status === 'draft')
                                        <span class="badge bg-warning text-dark">Draft</span>
                                    @else
                                        <span class="badge bg-danger">Closed</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex gap-1 justify-content-center flex-wrap">
                                        {{-- Tombol Detail --}}
                                        <a href="{{ route('courses.show', $course) }}" class="btn btn-sm btn-outline-primary">
                                            Detail
                                        </a>
                                        
                                        {{-- Tombol Edit --}}
                                        <a href="{{ route('courses.edit', $course) }}" class="btn btn-sm btn-outline-warning">
                                            Edit
                                        </a>
                                        
                                        {{-- Tombol Hapus (Harus berupa Form karena method DELETE) --}}
                                        <form method="POST" action="{{ route('courses.destroy', $course) }}" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kursus ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">
                                    Belum ada data kursus. Silakan klik tombol "+ Tambah Kursus".
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection