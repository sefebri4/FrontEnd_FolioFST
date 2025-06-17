@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Dosen Sistem Informasi</h2>
    <div class="row">
        @foreach ($dosen_si as $dosen)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('dosen/' . $dosen->foto) }}" class="card-img-top" alt="{{ $dosen->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $dosen->nama }}</h5>
                        <p class="card-text">{{ $dosen->gelar }}</p>
                        <p class="card-text"><strong>Email:</strong> {{ $dosen->email }}</p>
                        <p class="card-text"><strong>Keahlian:</strong> {{ $dosen->bidang_keahlian }}</p>
                        <a href="{{ route('dosen.show', $dosen->id) }}" class="btn btn-primary">Lihat Biodata</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
