<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function profil() {
        return view('pages.profil');
    }

    public function informasi() {
        return view('pages.informasi');
    }

    public function fasilitas() {
        return view('pages.fasilitas');
    }

    public function galeri() {
        return view('pages.galeri');
    }

    public function kontak() {
        return view('pages.kontak');
    }
}
