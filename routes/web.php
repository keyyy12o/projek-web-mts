<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProgramController;

// =======================
// Redirect ke /home
// =======================
Route::get('/', function () {
    return redirect('/home');
});

// =======================
// Halaman Utama
// =======================
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/informasi', [PageController::class, 'informasi'])->name('informasi');
Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

// =======================
// Halaman Static (View langsung)
// =======================
Route::view('/academic', 'page.academic')->name('academic');
Route::view('/library', 'page.library')->name('library');

// =======================
// Program Pages
// =======================
Route::view('/program/senior', 'page.ekstrakulikuler')->name('program.ekstrakulikuler');
Route::get('/sejarah', [ProgramController::class, 'sejarah'])->name('program.sejarah');
Route::get('/visimisi', [ProgramController::class, 'visimisi'])->name('program.visimisi');
Route::get('/fasilitas', [PageController::class, 'fasilitas'])->name('page.fasilitas');


