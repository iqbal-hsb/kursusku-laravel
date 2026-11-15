@extends('layouts.app')

@section('title', 'Tambah Pendaftaran')

@section('content')
<div class="container py-4" style="max-width: 600px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h1 class="h3 mb-1">Pendaftaran Kursus</h1>
            <p class="text-muted mb-0">Pilih peserta dan kursus yang tersedia.</p>
        </div>
        <a href="{{ route('enrollments.index') }}" class="btn btn-outline-secondary">Kembali</a>
    </div>

    <form method="POST" action="{{ route('enrollments.store') }}" class="card card-body shadow-sm">
        @csrf

        {{-- Dropdown Participant --}}
        <div class="mb-3">
            <label for="participant_id" class="form-label">Nama Peserta (Participant)</label>
            <select name="participant_id" id="participant_id" class="form-select @error('participant_id') is-invalid @enderror" required>
                <option value="">-- Pilih Peserta --</option>
                @foreach ($participants as $participant)
                    <option value="{{ $participant->id }}" @selected(old('participant_id') == $participant->id)>
                        {{ $participant->name }} ({{ $participant->email }})
                    </option>
                @endforeach
            </select>
            @error('participant_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        {{-- Dropdown Course --}}
        <div class="mb-3">
            <label for="course_id" class="form-label">Pilih Kursus (Course)</label>
            <select name="course_id" id="course_id" class="form-select @error('course_id') is-invalid @enderror" required>
                <option value="">-- Pilih Kursus --</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" @selected(old('course_id') == $course->id)>
                        {{ $course->name }} (Mulai: {{ $course->start_date?->format('d/m/Y') }})
                    </option>
                @endforeach
            </select>
            @error('course_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="d-grid gap-2 mt-3">
            <button type="submit" class="btn btn-primary">Simpan Pendaftaran</button>
        </div>
    </form>
</div>
@endsection