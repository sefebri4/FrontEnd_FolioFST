@extends('layouts.app')

@section('content')
<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <h2>Berita Terbaru</h2>
        </div>
        <div class="row">
            @forelse ($berita as $item)
            <div class="col-lg-4 col-md-6 blog-item">
                <div class="blog-img">
                    <img src="{{ asset('storage/berita/' . $item->gambar) }}" alt="Gambar Berita">
                </div>
                <div class="blog-text">
                    <h3><a href="{{ route('berita.detail', $item->id) }}">{{ $item->judul }}</a></h3>
                    <div class="blog-meta">
                        <p><i class="fa fa-calendar-alt"></i> {{ $item->created_at->format('d M Y') }}</p>
                        <p><i class="fa fa-user"></i> Admin</p>
                    </div>
                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 100, '...') }}</p>
                    <a class="btn" href="{{ route('berita.detail', $item->id) }}">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>Tidak ada berita untuk ditampilkan.</p>
            </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $berita->links() }}
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection
