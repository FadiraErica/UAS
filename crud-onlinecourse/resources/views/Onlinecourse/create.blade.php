@extends('layouts.app') {{-- Menggunakan layout utama --}}

@section('title', 'Tambah Kursus')

@section('content')
<div class="form-container">
    <h2 class="text-center mb-4">Tambah Kursus</h2>
    
    <form action="{{ route('onlinecourse.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="id_kursus" class="form-label">ID Kursus</label>
            <input type="text" class="form-control" id="Course_Id" name="Course_Id" required>
        </div>

        <div class="mb-3">
            <label for="nama_kursus" class="form-label">Nama Kursus</label>
            <input type="text" class="form-control" id="Course_Name" name="Course_Name" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="Descriptions" name="Descriptions" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="Category" name="Category" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" id="Start_Date" name="Start_Date" required>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('onlinecourse.index') }}" class="btn btn-link">Kembali</a>
        </div>
    </form>
</div>
@endsection
