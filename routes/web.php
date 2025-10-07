<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [PageController::class, 'home']);
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/informasi', [PageController::class, 'informasi'])->name('informasi');
Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

Route::get('/academic', function () {
    return view('pages.academic');
})->name('academic');

Route::get('/exams', function () {
    return view('pages.exams');
})->name('exams');

Route::get('/library', function () {
    return view('pages.library');
})->name('library');

Route::get('/program/fasilitas', function () {
    return view('page.fasilitas');
})->name('program.fasilitas');

Route::get('/program/senior', function () {
    return view('ekstakulikuler');
})->name('program.ekstrakulikuler');

Route::get('/about', function () {
    return view('about');
});
