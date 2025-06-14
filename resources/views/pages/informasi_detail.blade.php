@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="hero" id="home">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1>Detail Informasi</h1>
                        <p>Fakultas Sains dan Teknologi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Detail Informasi -->
<div class="about wow fadeInUp" id="about">
    <div class="container">
        <div class="row">
            <div class="col img-col">
                <div class="about-img">
                    <img src="{{ $informasi->gambar }}" alt="{{ $informasi->judul }}">
                </div>
            </div>
            <div class="col content-col">
                <div class="about-content">
                    <div class="section-header">
                        <p>{{ \Carbon\Carbon::parse($informasi->tanggal_posting)->format('d M Y') }}</p>
                        <h2>{{ $informasi->judul }}</h2>
                    </div>
                    <div class="about-text">
                        <p>{!! nl2br(e($informasi->isi)) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
