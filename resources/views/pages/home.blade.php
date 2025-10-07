@extends('layouts.app')

@section('content')
<!-- Carousel Section -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
  <!-- Titik indikator bawah -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
  </div>

  <!-- Isi Slide -->
  <div class="carousel-inner">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <img src="{{ asset('images/school1.jpg') }}" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Slide 1">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center"
        style="top: 0; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.4); border-radius: 10px;">
        <h2 class="fw-bold text-white fst-italic">Selamat Datang di MTs Miftahul Huda</h2>
        <p class="text-light mb-0 fst-italic">Maju Bermutu Berakhlakul Karimah</p>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <img src="{{ asset('images/school4.jpg') }}" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Slide 2">
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <img src="{{ asset('images/school3.jpg') }}" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Slide 3">
    </div>

  </div>

  <!-- Tombol Navigasi Kiri-Kanan -->
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Section 2 Kotak -->
<section class="py-5">
  <div class="container text-center">
    <h2 class="mb-4">Empowering Every Learner</h2>
    <div class="row g-4">

      <!-- Academic -->
      <div class="col-md-4">
        <a href="{{ route('academic') }}" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <div class="mb-3">
                <i class="bi bi-book" style="font-size:40px; color:#0d6efd;"></i>
              </div>
              <h5 class="card-title">Tenaga Kependidikan</h5>
              <p class="card-text">It is a long established fact that a reader will be distracted by the readable content.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Exams -->
      <div class="col-md-4">
        <a href="{{ route('exams') }}" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <div class="mb-3">
                <i class="bi bi-award" style="font-size:40px; color:#0d6efd;"></i>
              </div>
              <h5 class="card-title">Jadwal Seragam</h5>
              <p class="card-text">It is a long established fact that a reader will be distracted by the readable content.</p>
            </div>
          </div>
        </a>
      </div>

    </div> <!-- row -->
  </div> <!-- container -->
</section>

<!-- Section Tentang Sekolah -->
<div class="container my-5">
  <div class="row align-items-center">
    <!-- Foto kiri -->
    <div class="col-md-4 text-center">
      <img src="{{ asset('images/school.jpg') }}" 
           alt="" 
           class="rounded-circle shadow img-fluid" 
           style="width: 280px; height: 280px; object-fit: cover;">
    </div>

    <!-- Teks kanan -->
    <div class="col-md-8">
      <h3 class="fw-bold">Tentang Sekolah</h3>
      <h5 class="text-success">MTS Miftahul Huda</h5>
      <p style="text-align: justify;">
        MTS Miftahul Huda adalah lembaga pendidikan setingkat SMP yang dinaungi 
        oleh Kementerian Agama, beralamat di Kecamatan Megamendung Kabupaten Bogor 
        yang dibangun di atas lahan tanah bersertifikat milik Yayasan Wakaf Miftahul Huda.
      </p>
    </div>
  </div>
</div>



<!-- Section Artikel Terbaru -->
<section class="py-5 bg-dark text-white">
    <div class="container">
        <h3 class="mb-4">
            Artikel <span class="text-warning">Terbaru</span>
        </h3>

        <div id="artikelCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- Item 1 -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center gap-3">
                        <img src="{{ asset('images/artikel1.jpg') }}" class="rounded shadow" style="width:300px; height:200px; object-fit:cover;" alt="Artikel 1">
                        <img src="{{ asset('images/artikel2.jpg') }}" class="rounded shadow" style="width:300px; height:200px; object-fit:cover;" alt="Artikel 2">
                        <img src="{{ asset('images/artikel3.jpg') }}" class="rounded shadow" style="width:300px; height:200px; object-fit:cover;" alt="Artikel 3">
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-3">
                        <img src="{{ asset('images/artikel4.jpg') }}" class="rounded shadow" style="width:300px; height:200px; object-fit:cover;" alt="Artikel 4">
                        <img src="{{ asset('images/artikel5.jpg') }}" class="rounded shadow" style="width:300px; height:200px; object-fit:cover;" alt="Artikel 5">
                        <img src="{{ asset('images/artikel6.jpg') }}" class="rounded shadow" style="width:300px; height:200px; object-fit:cover;" alt="Artikel 6">
                    </div>
                </div>

            </div>

            <!-- Indikator -->
            <div class="carousel-indicators mt-3">
                <button type="button" data-bs-target="#artikelCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#artikelCarousel" data-bs-slide-to="1"></button>
            </div>
        </div>
    </div>
</section>



@endsection
