<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fasilitas Sekolah</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fff;
      color: #222;
    }

    h1 {
      text-align: left;
      margin: 30px 60px 10px;
      font-size: 28px;
    }

    .line {
      width: 90%;
      height: 2px;
      background-color: #3ec23e;
      margin: 0 auto 40px;
    }

    .container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 40px;
      padding: 0 60px 60px;
    }

    .card {
      text-align: center;
    }

    .card img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 15px;c:\Users\ALYA DESTIANA\Downloads\lab kom.jpg
    }

    .card h3 {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .card p {
      font-size: 14px;
      color: #555;
      line-height: 1.4;
    }

    /* Warna garis hijau atas */
    header {
      background-color: #7ef27e;
      height: 8px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <header></header>

  <h1>Fasilitas</h1>
  <div class="line"></div>

  <div class="container">
    <div class="card">
      <img src="lapangan.jpg" alt="Lapangan">
      <h3>Lapangan</h3>
      <p>Lapangan tempat untuk upacara</p>
    </div>

    <div class="card">
      <img src="kelas mts2.jpg" alt="Ruang Kelas">
      <h3>Ruang Kelas</h3>
      <p>Tempat untuk belajar</p>
    </div>

    <div class="card">
      <img src="musholla.jpg" alt="Mushola">
      <h3>Mushola</h3>
      <p>Tempat solat berjamaah</p>
    </div>

    <div class="card">
      <img src="lab kom.jpg" alt="Ruang Lab">
      <h3>Ruang Lab</h3>
      <p>Tempat anak belajar teknologi</p>
    </div>

    <div class="card">
      <img src="kantin.jpg" alt="Kantin">
      <h3>Kantin</h3>
      <p>Tempat jajanan yang bermacam-macam</p>
    </div>

    <div class="card">
      <img src="ruang-bendahara.jpg" alt="Ruang Bendahara">
      <h3>Ruang Bendahara</h3>
      <p>Tempat pembayaran siswa</p>
    </div>

    <div class="card">
      <img src="toilet.jpg" alt="Toilet">
      <h3>Toilet</h3>
      <p>Tempat untuk keperluan kebersihan</p>
    </div>

    <div class="card">
      <img src="parkiran.jpg" alt="Parkiran">
      <h3>Parkiran</h3>
      <p>Tempat peninapan motor</p>
    </div>

    <div class="card">
      <img src="perpustakaan.jpg" alt="Perpustakaan">
      <h3>Perpustakaan</h3>
      <p>Ruang baca untuk anak berliterasi</p>
    </div>

    <div class="card">
      <img src="taman-sekolah.jpg" alt="Taman Sekolah">
      <h3>Taman Sekolah</h3>
      <p>Lingkungan sekolah untuk menghijaukan</p>
    </div>
  </div>

</body>
</html>
