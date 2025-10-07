@extends('layouts.app')

@section('content')
<h2>Informasi Sekolah</h2>

<p>Berikut adalah beberapa informasi penting terkait kegiatan di MTs Miftahul Huda:</p>

<h4>📢 Pengumuman Terbaru</h4>
<ul>
    <li>Pendaftaran siswa baru tahun ajaran 2025/2026 telah dibuka mulai tanggal <b>1 Juni 2025</b>.</li>
    <li>Ujian Tengah Semester (UTS) akan dilaksanakan pada <b>10–15 Oktober 2025</b>.</li>
    <li>Kegiatan pesantren kilat akan dilaksanakan selama bulan Ramadhan.</li>
</ul>

<h4>📅 Jadwal Kegiatan</h4>
<table class="table table-bordered mt-3">
    <thead class="table-light">
        <tr>
            <th>Tanggal</th>
            <th>Kegiatan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1 Juni 2025</td>
            <td>Mulai Pendaftaran Siswa Baru</td>
        </tr>
        <tr>
            <td>10–15 Oktober 2025</td>
            <td>Ujian Tengah Semester (UTS)</td>
        </tr>
        <tr>
            <td>5 November 2025</td>
            <td>Peringatan Maulid Nabi Muhammad SAW</td>
        </tr>
    </tbody>
</table>

<h4>🕒 Jam Sekolah</h4>
<p>Senin – Jumat: <b>07.00 – 15.00 WIB</b></p>
<p>Sabtu: <b>07.00 – 12.00 WIB</b></p>

@endsection
