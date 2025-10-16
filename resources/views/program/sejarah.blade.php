@extends('layouts.app')

@section('content')

<!-- BAGIAN HIJAU FULL WIDTH -->
<div style="background: linear-gradient(180deg, #27ae60, #2ecc71); color: white; text-align: center; padding: 80px 0; margin: 0; width: 100vw; position: relative; left: 50%; right: 50%; margin-left: -50vw; margin-right: -50vw;">
    <h1 style="font-size: 48px; font-weight: bold;">Sejarah</h1>
</div>

<!-- ISI HALAMAN -->
<div class="sejarah" style="display: flex; align-items: flex-start; gap: 20px; padding: 40px;">
  <img src="{{ asset('images/profil1.jpg') }}" 
       alt=""
       style="float: left; margin-right:20px; width:200px;">
  <div class="profil-text">
    <h2>Sejarah MTS Miftahul Huda</h2>
    <p>
      MTS Miftahul Huda adalah lembaga pendidikan yang selalu berusaha berada di garda terdepan sebagai wadah untuk
      mencerdaskan generasi, tidak hanya dalam ilmu pengetahuan umum yang berguna untuk kehidupan dunia, tetapi juga dalam ilmu agama yang menjadi bekal menuju
      akhirat agar mencetak generasi berilmu, berakhlak mulia, dan berdaya guna. MTs berkomitmen melahirkan insan yang seimbang antara kecerdasan intelektual dan spiritual.
    </p>
    <p>
      MTS Miftahul Huda berdiri tahun 1979 dengan 1 (satu) rombel menjalankan misi dakwah Islam dan kemasyarakatan. Kini MTS Miftahul Huda memiliki jumlah 6 (enam) ruang kelas dan 
      1 ruang kantor bersama terdiri dari skat ruang Kepala Madrasah, Kepala Bidang Kurikulum, Kepala Bidang Kesiswaan, ruang guru, tata usaha dan operator.
    </p>
  </div>
</div>

@endsection
