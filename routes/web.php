<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\DosenController;
use App\Models\Berita;

// =========================
// Halaman Utama (Beranda)
// =========================
Route::view('/', 'index')->name('beranda');

// =========================
// Route Profil Umum
// =========================
Route::view('/dekan', 'dekan')->name('dekan');
Route::view('/dosen', 'dosen')->name('dosen');
Route::view('/mahasiswa', 'mahasiswa')->name('mahasiswa');

// =========================
// Route Halaman Lain
// =========================
Route::view('/prestasi', 'prestasi')->name('prestasi');
Route::view('/galeri', 'galeri')->name('galeri');
Route::view('/proyek', 'proyek')->name('proyek');
Route::view('/informasi', 'informasi')->name('informasi');

// =========================
// Route Berita
// =========================
Route::get('/berita', function () {
    $berita = Berita::orderBy('tanggal_posting', 'desc')->paginate(6);
    return view('berita', compact('berita'));
})->name('berita.index');

Route::get('/berita/{id}', function ($id) {
    $berita = Berita::findOrFail($id);
    return view('berita_detail', compact('berita'));
})->name('berita.show');

// =========================
// Route Dosen Publik
// =========================
Route::prefix('dosen')->group(function () {
    Route::get('/informatika', [DosenController::class, 'dosenIf'])->name('dosen.if');
    Route::get('/rpl', [DosenController::class, 'dosenRpl'])->name('dosen.rpl');
    Route::get('/sistem-informasi', [DosenController::class, 'dosenSi'])->name('dosen.si');
    
    // Route fallback untuk dosen by ID (harus di bawah agar tidak konflik)
    Route::get('/{id}', [DosenController::class, 'show'])->name('dosen.show');
});
