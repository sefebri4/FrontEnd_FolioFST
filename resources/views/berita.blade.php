{{-- resources/views/berita.blade.php --}}
@extends('layouts.app')

@section('title', 'FolioFST - Berita')

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

    <!-- Blog Start -->
    <div class="blog" id="blog">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Blog Spot</p>
                <h2>Blog dan Berita Terbaru</h2>
            </div>
            <div class="row">
                @foreach ($berita as $item)
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="blog-img">
                                <img src="{{ asset('storage/' . $item->gambar_url) }}" alt="Blog" class="img-fluid">
                            </div>
                            <div class="blog-text">
                                <h2>{{ $item->judul }}</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i> {{ $item->penulis ?? 'Admin' }}</p>
                                    <p><i class="far fa-calendar-alt"></i> {{ $item->tanggal_posting->format('d-m-Y') }}</p>
                                </div>
                                <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 200, '...') }}</p>
                                <a class="btn" href="{{ route('berita.show', $item->id) }}">
                                    Read More <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Optional: Pagination --}}
            <div class="mt-4 d-flex justify-content-center">
                {{ $berita->links() }}
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
