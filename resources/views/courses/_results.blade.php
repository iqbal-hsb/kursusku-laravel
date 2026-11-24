<div id="course-results">
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead class="bg-primary text-white">
                <tr>
                    <th class="py-3 px-4">Kode</th>
                    <th class="py-3">Nama</th>
                    <th class="py-3">Biaya</th>
                    <th class="py-3">Kuota</th>
                    <th class="py-3">Mulai</th>
                    <th class="py-3">Status</th>
                    <th class="py-3 text-center" style="min-width: 220px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($courses as $course)
                    <tr>
                        <td class="px-4 fw-bold text-primary">{{ $course->code }}</td>
                        <td>{{ $course->name }}</td>
                        <td>Rp {{ number_format($course->fee, 0, ',', '.') }}</td>
                        <td>{{ $course->quota }} Kursi</td>
                        <td>{{ $course->start_date->format('d/m/Y') }}</td>
                        <td>
                            @if($course->status == 'open')
                                <span class="badge bg-success">Open</span>
                            @elseif($course->status == 'draft')
                                <span class="badge bg-warning text-dark">Draft</span>
                            @else
                                <span class="badge bg-danger">Closed</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="d-flex gap-1 justify-content-center">
                                <a href="{{ route('courses.show', $course) }}" class="btn btn-sm btn-outline-primary">Detail</a>
                                <a href="{{ route('courses.edit', $course) }}" class="btn btn-sm btn-outline-warning text-dark">Edit</a>
                                <form method="POST" action="{{ route('courses.destroy', $course) }}" onsubmit="return confirm('Hapus kursus ini?')" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-5 text-muted">
                            Tidak ada kursus yang sesuai pencarian/filter.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-between align-items-center mt-4 px-3 pb-3">
        <div class="text-muted small">
            Menampilkan {{ $courses->firstItem() ?? 0 }} sampai {{ $courses->lastItem() ?? 0 }} dari {{ $courses->total() }} hasil
        </div>
        <div>
            {{ $courses->links() }}
        </div>
    </div>
</div>