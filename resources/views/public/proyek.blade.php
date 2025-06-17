@extends('layouts.app')

@section('content')
<!-- Project Section Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title bg-white text-center text-primary px-3">Proyek</h5>
            <h1 class="mb-4">Hasil Proyek Mahasiswa & Dosen</h1>
        </div>
        <div class="row g-4">
            @forelse ($proyek as $item)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100 p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ $item->foto_url ?? asset('img/default.png') }}" alt="{{ $item->judul }}" style="width: 60px; height: 60px;">
                            <div class="ms-4">
                                <h5 class="mb-1">{{ $item->judul }}</h5>
                                <p class="mb-0">
                                    @if($item->mahasiswa)
                                        {{ $item->mahasiswa->nama }}
                                    @elseif($item->dosen)
                                        {{ $item->dosen->nama }}
                                    @endif
                                </p>
                            </div>
                        </div>
                        <p>{{ \Illuminate\Support\Str::limit($item->deskripsi, 120) }}</p>
                        <div class="d-flex justify-content-between">
                            <span class="badge {{ $item->status_badge_class }}">{{ $item->status }}</span>
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.proyek.show', $item->id) }}">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">Belum ada data proyek yang tersedia.</p>
            @endforelse
        </div>
    </div>
</div>
<!-- Project Section End -->
@endsection
