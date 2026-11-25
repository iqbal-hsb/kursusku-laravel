@extends('layouts.app') {{-- Pastikan nama layout Anda benar --}}

@section('content')
<div class="container py-5">
    <h1 class="h3 mb-4 fw-bold">Dashboard Administrator</h1>
    
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Total Kursus</h5>
                    <h2 class="display-5 fw-bold">{{ $totalCourses }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Total Peserta</h5>
                    <h2 class="display-5 fw-bold">{{ $totalParticipants }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Total Pendaftaran</h5>
                    <h2 class="display-5 fw-bold">{{ $totalEnrollments }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection