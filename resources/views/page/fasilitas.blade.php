<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fasilitas Sekolah</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Source+Sans+3:wght@400&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Source Sans 3", sans-serif;
            margin: 0;
            background: #fff;
            color: #222;
        }

        header {
            background: #6ee36f;
            padding: 15px 25px;
        }

        header h1 {
            margin: 0;
            font-family: "Playfair Display", serif;
            color: #064f09;
            font-size: 28px;
        }

        .line {
            height: 3px;
            width: 100%;
            background: linear-gradient(90deg, #1cb81c, #9dfb9d);
            margin: 0 auto 40px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto 50px;
            padding: 0 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 40px 20px;
            text-align: center;
        }

        .card img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .card h3 {
            font-family: "Playfair Display", serif;
            margin: 5px 0 10px;
            font-size: 20px;
        }

        .card p {
            font-size: 14px;
            color: #333;
            line-height: 1.5;
            max-width: 150px;
            margin: 0 auto;
        }

        @media (max-width: 900px) {
            .grid { grid-template-columns: repeat(3, 1fr); }
        }

        @media (max-width: 600px) {
            .grid { grid-template-columns: repeat(2, 1fr); }
        }

        @media (max-width: 400px) {
            .grid { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>

<header>
    <h1>Fasilitas</h1>
</header>

<div class="line"></div>

<div class="container">
    <div class="grid">

        <div class="card">
            <img src="{{ asset('images/Lapangan.jpeg') }}" alt="">
            <h3>Lapangan</h3>
            <p>Lapangan tempat untuk upacara</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/kelas_mts2.jpg') }}" alt="">
            <h3>Ruang Kelas</h3>
            <p>Tempat untuk belajar</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/musholla.jpg') }}" alt="">
            <h3>Mushola</h3>
            <p>Tempat solat berjamaah</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/lab_kom.jpg') }}" alt="">
            <h3>Ruang Lab</h3>
            <p>Tempat anak belajar teknologi</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/kantin.jpg') }}" alt="">
            <h3>Kantin</h3>
            <p>Tempat jajanan yang bermacam-macam</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/ruang_bendahara.jpg') }}" alt="">
            <h3>Ruang Bendahara</h3>
            <p>Tempat pembayaran siswa</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/toilet mts.jpeg') }}" alt="">
            <h3>Toilet</h3>
            <p>Tempat untuk keperluan kebersihan</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/Parkiran.jpg') }}" alt="">
            <h3>Parkiran</h3>
            <p>Tempat penyimpanan motor</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/Perpustakaan.jpg') }}" alt="">
            <h3>Perpustakaan</h3>
            <p>Ruang baca untuk anak berliterasi</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/taman_mts.jpg') }}" alt="">
            <h3>Taman Sekolah</h3>
            <p>Lingkungan sekolah untuk menghijaukan</p>
        </div>

    </div>
</div>

</body>
</html>
