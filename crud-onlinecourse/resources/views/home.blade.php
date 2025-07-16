@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="text-center">
        <h1 class="mb-3">Selamat Datang di Sistem Kursus Online</h1>
        <p class="lead mb-4">Aplikasi ini digunakan untuk mengelola data kursus dan mahasiswa secara efisien.</p>

        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{ route('onlinecourse.index') }}" class="btn btn-primary btn-lg px-4 me-sm-3">Kelola Kursus</a>
            <a href="{{ route('students.index') }}" class="btn btn-outline-secondary btn-lg px-4">Kelola Mahasiswa</a>
        </div>

        <div class="mt-5">
            <img src="https://i.pinimg.com/1200x/47/79/f2/4779f200d02304a65221cb55d66780e9.jpg" class="img-fluid rounded shadow" alt="Ilustrasi" style="max-height: 400px;">
        </div>
    </div>
@endsection
