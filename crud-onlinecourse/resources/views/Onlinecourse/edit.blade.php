@extends('layouts.app')
@section('title', 'Edit Kursus')

@section('content')
<div class="form-container mt-4">
    <h2 class="text-center mb-4">Edit Kursus</h2>

    {{-- Tampilkan error validasi jika ada --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('onlinecourse.update', $course->Course_Id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="Course_Id" class="form-label">ID Kursus</label>
            <input type="text" class="form-control" id="Course_Id" name="Course_Id" value="{{ $course->Course_Id }}" readonly>
        </div>

        <div class="mb-3">
            <label for="Course_Name" class="form-label">Nama Kursus</label>
            <input type="text" class="form-control" id="Course_Name" name="Course_Name" value="{{ old('Course_Name', $course->Course_Name) }}" required>
        </div>

        <div class="mb-3">
            <label for="Descriptions" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="Descriptions" name="Descriptions" rows="4" required>{{ old('Descriptions', $course->Descriptions) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="Category" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="Category" name="Category" value="{{ old('Category', $course->Category) }}" required>
        </div>

        <div class="mb-3">
            <label for="Start_Date" class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" id="Start_Date" name="Start_Date" value="{{ old('Start_Date', $course->Start_Date) }}" required>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('onlinecourse.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection
