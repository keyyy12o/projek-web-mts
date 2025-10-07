@extends('layouts')

@section('content')
<h2>Kontak Kami</h2>
<p>Silakan hubungi kami melalui kontak berikut:</p>

<ul>
    <li><strong>Alamat:</strong> Jl. Pendidikan No. 123, Yogyakarta</li>
    <li><strong>Telepon:</strong> (0274) 123456</li>
    <li><strong>Email:</strong> info@mtsmiftahulhuda.sch.id</li>
</ul>

<form action="#" method="post" class="mt-4">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="pesan" class="form-label">Pesan</label>
        <textarea class="form-control" id="pesan" name="pesan" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>
@endsection
