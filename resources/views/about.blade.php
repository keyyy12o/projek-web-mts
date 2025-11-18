@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        
        <!-- Foto di sebelah kiri -->
        <div class="flex justify-center">
            <img src="{{ asset('images/school1.jpg') }}" 
                 alt="Foto Sekolah MTS Miftahul Huda" 
                 class="rounded-full shadow-lg w-80 h-80 object-cover">
        </div>

        <!-- Teks di sebelah kanan -->
        <div>
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Sekolah</h2>
            <h3 class="text-2xl font-semibold text-green-700 mb-3">MTS Miftahul Huda</h3>
            <p class="text-gray-700 leading-relaxed">
                MTS Miftahul Huda adalah lembaga pendidikan setingkat SMP yang dinaungi 
                oleh Kementerian Agama, beralamat di Kecamatan Megamendung Kabupaten Bogor 
                yang dibangun di atas lahan tanah bersertifikat milik Yayasan Wakaf Miftahul Huda.
            </p>
        </div>

    </div>
</div>
@endsection