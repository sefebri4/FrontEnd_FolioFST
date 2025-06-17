{{-- resources/views/prestasi.blade.php --}}
@extends('public.layouts.app')

@section('content')
<!-- Prestasi Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="section-title text-center position-relative pb-3 mb-5">
            <h5 class="fw-bold text-primary text-uppercase">Prestasi</h5>
            <h1 class="mb-0">Prestasi Mahasiswa dan Dosen</h1>
        </div>

        <div class="row g-5">
            @foreach ($prestasi as $item)
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('prestasi/' . $item->foto) }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="#">
                            {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d M Y') }}
                        </a>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">{{ $item->judul }}</h4>
                        <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 100) }}</p>
                        <a class="text-uppercase" href="{{ route('admin.prestasi.show', $item->id) }}">Lihat Detail <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-5 d-flex justify-content-center">
            {{ $prestasi->links() }}
        </div>
    </div>
</div>
<!-- Prestasi End -->
@endsection
