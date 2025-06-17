<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\DosenController;

// =========================
// Route Tampilan Website Umum
// =========================

Route::get('/', [PageController::class, 'index'])->name('beranda');

Route::get('/dekan', [PageController::class, 'dekan'])->name('dekan');
Route::get('/dosen', [PageController::class, 'dosen'])->name('dosen');
Route::get('/mahasiswa', [PageController::class, 'mahasiswa'])->name('mahasiswa');
Route::get('/prestasi', [PageController::class, 'prestasi'])->name('prestasi');
Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');
Route::get('/proyek', [PageController::class, 'proyek'])->name('proyek');
Route::get('/informasi', [PageController::class, 'informasi'])->name('informasi');
Route::get('/berita', [PageController::class, 'berita'])->name('berita.index');
Route::get('/berita/{id}', [PageController::class, 'beritaDetail'])->name('berita.show');

// =========================
// Route Tambahan Jika Diperlukan untuk Admin
// =========================

// Admin Berita
Route::resource('/admin/berita', BeritaController::class)->names([
    'index'   => 'admin.berita.index',
    'create'  => 'admin.berita.create',
    'store'   => 'admin.berita.store',
    'edit'    => 'admin.berita.edit',
    'update'  => 'admin.berita.update',
    'destroy' => 'admin.berita.destroy',
    'show'    => 'admin.berita.show',
]);

// =========================
// Route Dosen Berdasarkan Program Studi
// =========================

Route::prefix('dosen')->group(function () {
    Route::get('/informatika', [DosenController::class, 'dosenIf'])->name('dosen.if');
    Route::get('/rpl', [DosenController::class, 'dosenRpl'])->name('dosen.rpl');
    Route::get('/sistem-informasi', [DosenController::class, 'dosenSi'])->name('dosen.si');
    Route::get('/{id}', [DosenController::class, 'show'])->name('dosen.show');
});
