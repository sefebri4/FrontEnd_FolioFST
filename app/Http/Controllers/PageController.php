<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Prestasi;
use App\Models\Proyek;
use App\Models\Informasi;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class PageController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->take(3)->get();
        $prestasi = Prestasi::latest()->take(3)->get();
        $proyek = Proyek::latest()->take(3)->get();
        return view('public.index', compact('berita', 'prestasi', 'proyek'));
    }

    public function dekan()
    {
        return view('public.dekan');
    }

    public function dosen()
    {
        $dosen = Dosen::all();
        return view('public.dosen', compact('dosen'));
    }

    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::all();
        return view('public.mahasiswa', compact('mahasiswa'));
    }

    public function prestasi()
    {
        $prestasi = Prestasi::latest()->paginate(6);
        return view('public.prestasi', compact('prestasi'));
    }

    public function galeri()
    {
        return view('public.galeri');
    }

    public function proyek()
    {
        $proyek = Proyek::latest()->paginate(6);
        return view('public.proyek', compact('proyek'));
    }

    public function informasi()
    {
        $informasi = Informasi::latest()->paginate(6);
        return view('public.informasi', compact('informasi'));
    }

    public function berita()
    {
        $berita = Berita::orderBy('tanggal_posting', 'desc')->paginate(6);
        return view('public.berita', compact('berita'));
    }

    public function beritaDetail($id)
    {
        $berita = Berita::findOrFail($id);
        return view('public.berita_detail', compact('berita'));
    }
}
