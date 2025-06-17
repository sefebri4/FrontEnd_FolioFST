@extends('public.layouts.app')

@section('content')
<!-- Detail Prestasi Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s">
                @if($prestasi->foto)
                    <img class="img-fluid w-100 rounded" src="{{ asset('prestasi/' . $prestasi->foto) }}" alt="Gambar Prestasi">
                @else
                    <img class="img-fluid w-100 rounded" src="https://via.placeholder.com/800x600?text=No+Image" alt="No Image">
                @endif
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">{{ $prestasi->judul }}</h1>
                <p class="mb-4">{{ $prestasi->deskripsi }}</p>

                <ul class="list-unstyled">
                    <li><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($prestasi->tanggal)->translatedFormat('d F Y') }}</li>
                    @if ($prestasi->mahasiswa)
                        <li><strong>Mahasiswa:</strong> {{ $prestasi->mahasiswa->nama }} ({{ $prestasi->nim }})</li>
                    @endif
                    @if ($prestasi->dosen)
                        <li><strong>Dosen:</strong> {{ $prestasi->dosen->nama }} ({{ $prestasi->nidn }})</li>
                    @endif
                </ul>

                <a href="{{ route('admin.prestasi.index') }}" class="btn btn-primary mt-3"><i class="bi bi-arrow-left"></i> Kembali ke Daftar Prestasi</a>
            </div>
        </div>
    </div>
</div>
<!-- Detail Prestasi End -->
@endsection
