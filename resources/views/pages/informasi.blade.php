@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="hero" id="home">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1>Informasi</h1>
                        <p>Fakultas Sains dan Teknologi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Informasi List -->
<div class="blog" id="blog">
    <div class="container">
        <div class="section-header text-center wow zoomIn">
            <p>Informasi Terkini</p>
            <h2>Kegiatan & Pengumuman</h2>
        </div>
        <div class="row">
            @foreach($informasiList as $item)
            <div class="col-lg-6">
                <div class="blog-item wow fadeInUp">
                    <div class="blog-img">
                        <img src="{{ $item->gambar }}" alt="Gambar Informasi">
                    </div>
                    <div class="blog-text">
                        <h2>{{ $item->judul }}</h2>
                        <div class="blog-meta">
                            <p><i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($item->tanggal_posting)->format('d M Y') }}</p>
                        </div>
                        <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 150) }}</p>
                        <a class="btn" href="{{ route('informasi.show', $item->id) }}">Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
