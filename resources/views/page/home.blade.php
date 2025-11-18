@extends('layouts.app')

@section('content')

<!-- Tambahkan link AOS di bagian atas -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- Carousel Section -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/school1.jpg') }}" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Slide 1">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center"
        style="top: 0; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.4); border-radius: 10px;">
        <h2 class="fw-bold text-white fst-italic">Selamat Datang di MTs Miftahul Huda</h2>
        <p class="text-light mb-0 fst-italic">Maju Bermutu Berakhlakul Karimah</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ asset('images/school4.jpg') }}" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Slide 2">
    </div>

    <div class="carousel-item">
      <img src="{{ asset('images/school3.jpg') }}" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Slide 3">
    </div>
  </div>

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

    <div class="row justify-content-center g-4">
      
      <!-- Tenaga Kependidikan -->
      <div class="col-md-4" data-aos="fade-right">
        <a href="{{ route('academic') }}" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm border-0 feature-card">
            <div class="card-body text-center">
              <div class="mb-3">
                <i class="bi bi-person-fill" style="font-size:50px; color:#0d6efd;"></i>
              </div>
              <h5 class="card-title fw-semibold">Tenaga Kependidikan</h5>
              <p class="card-text text-muted">
                It is a long established fact that a reader will be distracted by the readable content.
              </p>
            </div>
          </div>
        </a>
      </div>

      <!-- Jadwal Seragam -->
      <div class="col-md-4" data-aos="fade-left">
        <a href="{{ route('exams') }}" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm border-0 feature-card">
            <div class="card-body text-center">
              <div class="mb-3">
                <i class="bi bi-calendar-week-fill" style="font-size:50px; color:#0d6efd;"></i>
              </div>
              <h5 class="card-title fw-semibold">Jadwal Seragam</h5>
              <p class="card-text text-muted">
                It is a long established fact that a reader will be distracted by the readable content.
              </p>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- Hover effect -->
<style>
  .feature-card {
    transition: all 0.3s ease;
    border-radius: 15px;
  }
  .feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
  }
</style>

<!-- Section Tentang Sekolah -->
<section class="py-5" style="background-color: #eaf7ee;">
  <div class="container">
    <div class="row align-items-center">
      
      <div class="col-md-4 text-center mb-4 mb-md-0" data-aos="zoom-in">
        <img src="{{ asset('images/school.jpg') }}" 
             alt="Foto Sekolah" 
             class="rounded-circle shadow-lg img-fluid" 
             style="width: 280px; height: 280px; object-fit: cover;">
      </div>

      <div class="col-md-8" data-aos="fade-left">
        <h3 class="fw-bold text-dark">Tentang Sekolah</h3>
        <h5 class="text-success">MTS Miftahul Huda</h5>
        <p class="text-secondary" style="text-align: justify; line-height: 1.7;">
          MTS Miftahul Huda adalah lembaga pendidikan setingkat SMP yang dinaungi 
          oleh Kementerian Agama, beralamat di Kecamatan Megamendung Kabupaten Bogor 
          yang dibangun di atas lahan tanah bersertifikat milik Yayasan Wakaf Miftahul Huda.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- Section Artikel Terbaru -->
<section class="py-5 bg-dark text-white">
  <div class="container">
    <h3 class="mb-4">
      Artikel <span class="text-warning">Terbaru</span>
    </h3>
    
    <div id="artikelCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="d-flex justify-content-center gap-3">
            <img src="{{ asset('images/artikel1.jpg') }}" class="rounded shadow" style="width:300px; height:200px; object-fit:cover;" alt="Artikel 1">
            <img src="{{ asset('images/artikel2.jpg') }}" class="rounded shadow" style="width:300px; height:200px; object-fit:cover;" alt="Artikel 2">
            <img src="{{ asset('images/artikel3.jpg') }}" class="rounded shadow" style="width:300px; height:200px; object-fit:cover;" alt="Artikel 3">
          </div>
        </div>

        <div class="carousel-item">
          <div class="d-flex justify-content-center gap-3">
            <img src="{{ asset('images/artikel4.jpg') }}" class="rounded shadow" style="width:300px; height:200px; object-fit:cover;" alt="Artikel 4">
            <img src="{{ asset('images/artikel5.jpg') }}" class="rounded shadow" style="width:300px; height:200px; object-fit:cover;" alt="Artikel 5">
            <img src="{{ asset('images/artikel6.jpg') }}" class="rounded shadow" style="width:300px; height:200px; object-fit:cover;" alt="Artikel 6">
          </div>
        </div>

      </div>

      <div class="carousel-indicators mt-3">
        <button type="button" data-bs-target="#artikelCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#artikelCarousel" data-bs-slide-to="1"></button>
      </div>
    </div>
  </div>
</section>
<div class="container">
    </div>

    <!-- Google Maps - Megamendung -->
    <div class="map-container" style="margin-top: 40px;">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.019859503728!2d106.9351070141393!3d-6.631235995199173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cbd7b4eecf0f%3A0x3039d80b220cc90!2sMegamendung%2C%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1696856326789!5m2!1sen!2sid" 
                      width="100%" 
            height="350" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>


<footer style="background-color: #f8f9fa; padding: 20px 0; text-align: center;">
    <div style="margin-bottom: 10px;">
        <a href="https://wa.me/6281234567890" target="_blank" style="margin: 0 10px; color: #25D366;">
            <i class="fab fa-whatsapp fa-2x"></i>
        </a>
        <a href="https://instagram.com/username" target="_blank" style="margin: 0 10px; color: #C13584;">
            <i class="fab fa-instagram fa-2x"></i>
        </a>
        <a href="https://facebook.com/username" target="_blank" style="margin: 0 10px; color: #3b5998;">
            <i class="fab fa-facebook fa-2x"></i>
           </a>
        <a href="https://twitter.com/username" target="_blank" style="margin: 0 10px; color: #1DA1F2;">
            <i class="fab fa-twitter fa-2x"></i>
        </a>
        <a href="https://youtube.com/channel/ypurchannelid" target="_blank" style="margin: 0 10px; color: #e80e0e;">
            <i class="fab fa-youtube fa-2x"></i>
        </a>
    </div>
    <div style="font-size: 14px; color: #6c757d;">
        &copy; {{ date('Y') }} Nama Aplikasi atau Perusahaan. All rights reserved.
    </div>

<footer class="bg-success text-white py-4 mt-5 text-center">
  <p>MTS Miftahul Huda © 2025. All rights reserved</p>
</footer>

<!-- Tambahkan script AOS di bagian bawah -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // durasi animasi (ms)
    once: true      // animasi hanya muncul sekali
  });
</script>

@endsection
