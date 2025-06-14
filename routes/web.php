<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Halaman utama
Route::get('/', [PageController::class, 'index'])->name('beranda');

// Berita
Route::get('/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/berita/{slug}', [PageController::class, 'beritaDetail'])->name('berita.detail');

// Informasi
Route::get('/informasi', [PageController::class, 'informasi'])->name('informasi');

// Galeri
Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');

// Dosen
Route::get('/dosen', [PageController::class, 'dosen'])->name('dosen');

// Mahasiswa
Route::get('/mahasiswa', [PageController::class, 'mahasiswa'])->name('mahasiswa');

// Proyek
Route::get('/proyek', [PageController::class, 'proyek'])->name('proyek');

// Prestasi
Route::get('/prestasi', [PageController::class, 'prestasi'])->name('prestasi');

// Halaman Statis
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
