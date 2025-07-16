@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="card-title mb-4">Daftar Mahasiswa</h3>

            {{-- Flash Message --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Tombol Tambah --}}
            <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">+ Tambah Mahasiswa</a>

            {{-- Form Pencarian --}}
            <form method="GET" action="{{ route('students.index') }}" class="mb-3">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Cari nama/email..."
                           value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">Cari</button>
                </div>
            </form>

            {{-- Tabel Mahasiswa --}}
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Course_Id</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td>{{ $student->course->Course_Id ?? '-' }}</td>
                                <td>{{ $student->Name }}</td>
                                <td>{{ $student->Email }}</td>
                                <td>{{ $student->Phone_Number }}</td>
                                <td>
                                    {{-- Tombol Edit --}}
                                    <a href="{{ route('students.edit', ['student' => $student->Students_Id]) }}" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>

                                    {{-- Tombol Hapus --}}
                                    <form action="{{ route('students.destroy', ['student' => $student->Students_Id]) }}" method="POST"
                                          style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Belum ada data mahasiswa.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            {{ $students->withQueryString()->links() }}
        </div>
    </div>
@endsection
