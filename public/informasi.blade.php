@extends('layouts.app')

@section('content')
<!-- Hero Start -->
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
<!-- Hero End -->

<!-- Blog Start -->
<div class="blog" id="blog">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Informasi Terkini</p>
            <h2>Kegiatan, Proyek, dan Beasiswa</h2>
        </div>
        <div class="row">
            @foreach ($informasi as $item)
            <div class="col-lg-6">
                <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-img">
                        <img src="{{ $item->gambar_url ?? asset('img/default.jpg') }}" alt="Blog">
                    </div>
                    <div class="blog-text">
                        <h2>{{ $item->judul }}</h2>
                        <div class="blog-meta">
                            <p><i class="far fa-user"></i>Admin</p>
                            <p><i class="far fa-list-alt"></i>Informasi</p>
                            <p><i class="far fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($item->tanggal_posting)->format('d-M-Y') }}</p>
                            <p><i class="far fa-comments"></i>0</p>
                        </div>
                        <p>
                            {{ Str::limit(strip_tags($item->isi), 150) }}
                        </p>
                        <a class="btn" href="{{ route('informasi.detail', $item->id) }}">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $informasi->links() }}
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection
