@extends('layouts.app')

@section('content')
<h2>Galeri Sekolah</h2>
<div class="row">
    <div class="col-md-4 mb-3">
        <img src="{{ asset('galeri1.jpg') }}" class="img-fluid rounded" alt="Kegiatan 1">
    </div>
    <div class="col-md-4 mb-3">
        <img src="{{ asset('galeri2.jpg') }}" class="img-fluid rounded" alt="Kegiatan 2">
    </div>
    <div class="col-md-4 mb-3">
        <img src="{{ asset('galeri3.jpg') }}" class="img-fluid rounded" alt="Kegiatan 3">
    </div>
</div>
<p class="mt-3">Dokumentasi kegiatan MTs Miftahul Huda.</p>
@endsection
