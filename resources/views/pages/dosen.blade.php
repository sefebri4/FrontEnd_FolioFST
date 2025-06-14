@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Dosen</h2>

    <form method="GET" action="{{ route('admin.dosen.index') }}" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari nama dosen..." value="{{ request('search') }}">
            <button class="btn btn-primary">Cari</button>
        </div>
    </form>

    <div class="row">
        @forelse ($dosen as $item)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ $item->foto }}" class="card-img-top" alt="Foto {{ $item->nama }}" style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->nama }}</h5>
                    <p class="card-text">
                        <strong>Gelar:</strong> {{ $item->gelar }}<br>
                        <strong>NIDN:</strong> {{ $item->nidn }}<br>
                        <strong>Email:</strong> {{ $item->email }}<br>
                        <strong>Program Studi:</strong> {{ $item->programStudi->nama ?? '-' }}
                    </p>
                    <a href="{{ route('admin.dosen.show', $item->id) }}" class="btn btn-outline-primary btn-sm">Lihat Biodata</a>
                </div>
            </div>
        </div>
        @empty
        <p class="text-center">Tidak ada dosen ditemukan.</p>
        @endforelse
    </div>

    <div class="d-flex justify-content-center mt-3">
        {{ $dosen->links() }}
    </div>
</div>
@endsection
