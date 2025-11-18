<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('page.home');
    }

    public function profil() {
        return view('page.profil');
    }

    public function informasi() {
        return view('page.informasi');
    }

    public function fasilitas() {
        return view('page.fasilitas');
    }

    public function galeri() {
        return view('page.galeri');
    }

    public function kontak() {
        return view('page.kontak');
    }
}
