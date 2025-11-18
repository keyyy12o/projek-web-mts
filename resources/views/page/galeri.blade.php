@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h2 class="gallery-title">Galeri</h2>
    </div>
    

    <div class="row row-cols-1 row-cols-md-4 g-4">
        @php
            $galeriItems = [
                ['img' => 'pelepasan.jpg', 'caption' => 'Acara pelepasan kelas sembilan'],
                ['img' => 'haflah.jpg', 'caption' => 'Haflah mts miftahul huda'],
                ['img' => 'upacara.jpg', 'caption' => 'Upacara'],
                ['img' => 'paskibra.jpg', 'caption' => 'Pelatihan ekskul paskibra'],
                ['img' => 'pengajian.jpg', 'caption' => 'Pengajian rutin setiap jumat'],
                ['img' => 'praktik.jpg', 'caption' => 'Kegiatan praktik'],
                ['img' => 'paduan_suara.jpg', 'caption' => 'Persiapan padus acara kelulusan'],
                ['img' => 'taekwondo.jpg', 'caption' => 'Perlombaan taekwondo sekecamatan'],
                ['img' => 'perpisahan.jpg', 'caption' => 'Perpisahan kelas sembilan '],
                ['img' => 'informatika.jpg', 'caption' => 'Ujian praktik informatika'],
                ['img' => 'perkemahan.jpg', 'caption' => 'Acara perkemahan'],
                ['img' => 'berbagi.jpg', 'caption' => 'Kegiatan berbagi di bulan puasa'],
            ];
        @endphp

        @foreach($galeriItems as $item)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/' . $item['img']) }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text text-center">{{ $item['caption'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-5">
        <a href="#" class="btn btn-outline-success">Selengkapnya..</a>
    </div>


@endsection
