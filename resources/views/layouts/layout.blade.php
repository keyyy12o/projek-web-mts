<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>MTs Miftahul Huda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-teal" style="background-color: #006666;">
        <div class="container">
            <a class="navbar-brand" href="/">MTs Miftahul Huda</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="/visi-misi">Visi Misi</a></li>
                    <li class="nav-item"><a class="nav-link" href="/fasilitas">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="/galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="/kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="bg-dark text-white text-center p-3 mt-5">
        &copy; 2025 MTs Miftahul Huda. All rights reserved.
    </footer>
</body>
</html>