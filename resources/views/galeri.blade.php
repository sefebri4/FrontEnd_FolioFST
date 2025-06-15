@extends('layouts.app')

@section('content')
<!-- Hero Start -->
<div class="hero" id="home">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1>Galeri</h1>
                        <p>Fakultas Sains dan Teknologi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Portfolio Start -->
<div class="portfolio" id="portfolio">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Momen Kegiatan</p>
            <h2>Galeri FST</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <ul id="portfolio-filter">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-1">Web Design</li>
                    <li data-filter=".filter-2">Mobile Apps</li>
                    <li data-filter=".filter-3">Game Dev</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            @foreach ($galeri as $item)
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-{{ ($loop->index % 3) + 1 }} wow fadeInUp" data-wow-delay="{{ ($loop->index % 4) * 0.2 }}s">
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <img src="{{ $item->gambar_url ?? asset('img/default.jpg') }}" alt="Image">
                    </div>
                    <div class="portfolio-text">
                        <h3>{{ $item->judul }}</h3>
                        <a class="btn" href="{{ $item->gambar_url ?? asset('img/default.jpg') }}" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $galeri->links() }}
        </div>
    </div>
</div>
<!-- Portfolio End -->
@endsection
