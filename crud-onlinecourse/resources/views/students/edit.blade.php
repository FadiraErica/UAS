@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="card-title mb-4">Edit Mahasiswa</h3>

            {{-- Tampilkan Error Validasi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Form --}}
            <form action="{{ route('students.update', $student->Students_Id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="course_id" class="form-label">Course ID (isi manual):</label>
                    <input type="number" class="form-control" name="Course_Id" required>
                    <small class="text-muted">Masukkan ID sesuai data di tabel courses.</small>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nama:</label>
                    <input type="text" class="form-control" name="Name" required value="{{ old('Name', $student->Name) }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="Email" class="form-control" name="Email" required value="{{ old('Email', $student->Email) }}">
                </div>

                <div class="mb-3">
                    <label for="phone_number" class="form-label">No HP:</label>
                    <input type="text" class="form-control" name="Phone_Number" required value="{{ old('Phone_Number', $student->Phone_Number) }}">
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
