<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistem Kursus Online')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #eaeaea;
        }

        .navbar-brand {
            font-weight: bold;
            color: #007bff !important;
        }

        .hero {
            background: linear-gradient(to right, #007bff, #0056b3);
            color: white;
            padding: 50px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 0;
        }

        .course-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-weight: 600;
        }

        .footer {
            margin-top: 60px;
            background-color: #ffffff;
            border-top: 1px solid #eaeaea;
            padding: 20px 0;
            text-align: center;
            color: #888;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004fa3;
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Sistem Kursus Online</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('onlinecourse*') ? 'active' : '' }}" href="{{ route('onlinecourse.index') }}">Kursus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('students*') ? 'active' : '' }}" href="{{ route('students.index') }}">Mahasiswa</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    {{-- Hero Section --}}
    <div class="hero mb-5">
        <h1>Belajar Jadi Lebih Mudah</h1>
        <p>Temukan berbagai kursus menarik dan tingkatkan kemampuanmu!</p>
    </div>

    {{-- Konten --}}
    <div class="container mb-5">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="footer">
        &copy; {{ date('Y') }} Sistem Kursus Online. All rights reserved.
    </footer>

    {{-- JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
