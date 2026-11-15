@extends('layouts.app')

@section('title', 'Laporan Pendaftaran')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h1 class="h3 mb-1">Laporan Pendaftaran Kursus</h1>
            <p class="text-muted mb-0">Data relasional antara Peserta, Kursus, dan Jadwal.</p>
        </div>
        <a href="{{ route('enrollments.create') }}" class="btn btn-primary">+ Tambah Pendaftaran</a>
    </div>

    {{-- Pesan Sukses --}}
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
                            <th>No</th>
                            <th>Nama Peserta</th>
                            <th>Email</th>
                            <th>Kursus</th>
                            <th>Tanggal Mulai</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($enrollments as $index => $enrollment)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                {{-- Mengambil nama dari tabel participants --}}
                                <td class="fw-bold">{{ $enrollment->participant->name }}</td>
                                <td>{{ $enrollment->participant->email }}</td>
                                
                                {{-- Mengambil nama dari tabel courses --}}
                                <td>{{ $enrollment->course->name }}</td>
                                
                                {{-- Mengambil tanggal dari tabel courses --}}
                                <td>{{ $enrollment->course->start_date?->format('d/m/Y') }}</td>
                                
                                <td>
                                    <span class="badge bg-primary">{{ ucfirst($enrollment->status) }}</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">
                                    Belum ada data pendaftaran.
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