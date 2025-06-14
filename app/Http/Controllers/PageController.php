<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Informasi;
use App\Models\Galeri;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Proyek;
use App\Models\Prestasi;
use App\Models\ProgramStudi;

class PageController extends Controller
{
    /**
     * Halaman Utama
     */
    public function index(): View
    {
        $berita = Berita::latest()->take(3)->get();
        $informasi = Informasi::latest()->take(3)->get();
        $galeri = Galeri::latest()->take(6)->get();

        return view('pages.index', compact('berita', 'informasi', 'galeri'));
    }

    /**
     * Daftar Semua Berita
     */
    public function berita(): View
    {
        $berita = Berita::latest()->paginate(6);
        return view('pages.berita', compact('berita'));
    }

    /**
     * Detail Berita berdasarkan slug
     */
    public function beritaDetail(string $slug): View
    {
        $item = Berita::where('slug', $slug)->firstOrFail();
        return view('pages.berita-detail', compact('item'));
    }

    /**
     * Daftar Informasi
     */
    public function informasi(): View
    {
        $informasi = Informasi::latest()->paginate(6);
        return view('pages.informasi', compact('informasi'));
    }

    /**
     * Galeri Foto
     */
    public function galeri(): View
    {
        $galeri = Galeri::latest()->paginate(12);
        return view('pages.galeri', compact('galeri'));
    }

    /**
     * Daftar Dosen
     */
    public function dosen(): View
    {
        $dosen = Dosen::with('programStudi')->orderBy('nama')->get();
        return view('pages.dosen', compact('dosen'));
    }

    /**
     * Daftar Mahasiswa
     */
    public function mahasiswa(): View
    {
        $mahasiswa = Mahasiswa::with('programStudi')->orderBy('nama')->paginate(10);
        return view('pages.mahasiswa', compact('mahasiswa'));
    }

    /**
     * Daftar Proyek Mahasiswa
     */
    public function proyek(): View
    {
        $proyek = Proyek::with(['mahasiswa', 'dosen'])->latest()->paginate(9);
        return view('pages.proyek', compact('proyek'));
    }

    /**
     * Daftar Prestasi Mahasiswa
     */
    public function prestasi(): View
    {
        $prestasi = Prestasi::with(['mahasiswa', 'dosen'])->latest()->paginate(9);
        return view('pages.prestasi', compact('prestasi'));
    }

    /**
     * Halaman Tentang
     */
    public function tentang(): View
    {
        return view('pages.tentang');
    }

    /**
     * Halaman Kontak
     */
    public function kontak(): View
    {
        return view('pages.kontak');
    }
}
