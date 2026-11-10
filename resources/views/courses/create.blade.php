@extends('layouts.app')

@section('title', 'Tambah Kursus')

@section('content')
<div class="container py-4" style="max-width: 760px">
    <h1 class="h3 mb-3">Tambah Kursus</h1>

    <form method="POST" action="{{ route('courses.store') }}" class="card card-body">
        @csrf

        <div class="mb-3">
            <label class="form-label">Kode Kursus</label>
            <input type="text" name="code" value="{{ old('code') }}" class="form-control" required>
            @error('code') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Kursus</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
            @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
            @error('description') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Biaya</label>
                <input type="number" name="fee" value="{{ old('fee') }}" class="form-control" required>
                @error('fee') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Kuota</label>
                <input type="number" name="quota" value="{{ old('quota', 20) }}" class="form-control" required>
                @error('quota') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Tanggal Mulai</label>
                <input type="date" name="start_date" value="{{ old('start_date') }}" class="form-control" required>
                @error('start_date') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select" required>
                    <option value="draft" @selected(old('status') === 'draft')>Draft</option>
                    <option value="open" @selected(old('status') === 'open')>Open</option>
                    <option value="closed" @selected(old('status') === 'closed')>Closed</option>
                </select>
                @error('status') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Simpan Kursus</button>
            <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection