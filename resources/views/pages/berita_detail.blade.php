@extends('layouts.app')

@section('content')
<!-- Single Blog Start -->
<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('storage/berita/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
                    </div>
                    <div class="blog-text">
                        <h2>{{ $berita->judul }}</h2>
                        <div class="blog-meta">
                            <p><i class="fa fa-calendar-alt"></i> {{ $berita->created_at->format('d M Y') }}</p>
                            <p><i class="fa fa-user"></i> Admin</p>
                        </div>
                        <div>
                            {!! $berita->isi !!}
                        </div>
                        <a href="{{ route('berita.index') }}" class="btn btn-secondary mt-3">← Kembali ke daftar berita</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Single Blog End -->
@endsection
