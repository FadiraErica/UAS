@extends('layouts.app')

@section('title', 'Daftar Kursus')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Kursus</h2>
        <a href="{{ route('onlinecourse.create') }}" class="btn btn-primary">+ Tambah Kursus</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover shadow-sm align-middle">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nama Kursus</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Tanggal Mulai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($courses as $course)
                    <tr>
                        <td>{{ $course->Course_Id }}</td>
                        <td>{{ $course->Course_Name }}</td>
                        <td>{{ $course->Descriptions ?? '-' }}</td>
                        <td>{{ $course->Category }}</td>
                        <td>{{ $course->Start_Date }}</td>
                        <td>
                            <a href="{{ route('onlinecourse.edit', $course->Course_Id) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                            <form action="{{ route('onlinecourse.destroy', $course->Course_Id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada kursus yang tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
