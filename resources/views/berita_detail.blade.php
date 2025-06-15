{{-- resources/views/berita_detail.blade.php --}}
@extends('layouts.app')

@section('title', 'FolioFST - Berita Detail')

@section('content')
    <!-- Hero Start -->
    <div class="hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <h1>Berita</h1>
                            <p>Fakultas Sains dan Teknologi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Berita Detail Start -->
    <div class="about wow fadeInUp" id="about" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col img-col mb-4">
                    <div class="about-img">
                        <img src="{{ asset('storage/' . $berita->gambar_url) }}" alt="Gambar Berita" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col content-col">
                    <div class="about-content">
                        <div class="section-header">
                            <p>{{ $berita->tanggal_posting->format('d-m-Y') }}</p>
                            <h2>{{ $berita->judul }}</h2>
                        </div>
                        <div class="about-text">
                            {!! nl2br(e($berita->isi)) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Berita Detail End -->
@endsection
