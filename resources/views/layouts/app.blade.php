<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>MTs Miftahul Huda</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        /* Reset margin & padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            height: 100%;
        }

        /* 🌿 ukuran & bentuk logo */
        .navbar-brand img {
            height: 50px;
            width: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }

        /* 🌿 navbar hijau */
        .navbar {
            background-color: #2e7d32 !important;
        }

        .navbar a,
        .navbar-brand {
            color: white !important;
            font-weight: 500;
        }

        .navbar a:hover {
            color: #c8e6c9 !important;
        }

        .navbar-toggler {
            background-color: #388e3c;
        }

        /* Hapus jarak tambahan dari image */
        img {
            display: block;
        }
    </style>
</head>

<body>

    <!-- 🌿 NAVBAR HIJAU -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
                <span>MTs Miftahul Huda</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">HOME</a></li>

                    <!-- Dropdown PROFIL -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            PROFIL
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('program.sejarah') }}">SEJARAH</a></li>
                            <li><a class="dropdown-item" href="{{ route('program.visi_misi') }}">VISI & MISI</a></li>
                            <li><a class="dropdown-item" href="{{ route('program.sarana_prasarana') }}">SARANA DAN PRASARANA</a></li>
                        </ul>
                    </li>
                    

                    <!-- Dropdown INFORMASI -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            INFORMASI
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('program.fasilitas') }}">FASILITAS</a></li>
                            <li><a class="dropdown-item" href="{{ route('program.ekstrakulikuler') }}">EKSTRAKULIKULER</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a href="{{ route('galeri') }}" class="nav-link">GALERI</a></li>
                    <li class="nav-item"><a href="{{ route('kontak') }}" class="nav-link">KONTAK</a></li>
                </ul>
                
            </div>
        </div>
    </nav>

    <!-- ISI HALAMAN -->
    @if (Route::is('home'))
        {{-- Halaman home tanpa container --}}
        @yield('content')
    @else
        {{-- Halaman lain tetap rapi --}}
        <div class="container mt-4">
            @yield('content')
        </div>
    @endif

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
