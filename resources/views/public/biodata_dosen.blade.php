@extends('public.layouts.app')

@section('title', 'Biodata Dosen')

@section('content')
<div class="container">
    <h2 class="mb-4">Biodata Dosen</h2>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('dosen/' . $dosen->foto) }}" alt="{{ $dosen->nama }}" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-md-8">
            <table class="table table-borderless">
                <tr>
                    <th>Nama</th>
                    <td>{{ $dosen->nama }}</td>
                </tr>
                <tr>
                    <th>NIDN</th>
                    <td>{{ $dosen->nidn }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $dosen->email }}</td>
                </tr>
                <tr>
                    <th>Gelar</th>
                    <td>{{ $dosen->gelar }}</td>
                </tr>
                <tr>
                    <th>Bidang Keahlian</th>
                    <td>{{ $dosen->bidang_keahlian }}</td>
                </tr>
                <tr>
                    <th>Telepon</th>
                    <td>{{ $dosen->telepon }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $dosen->alamat }}</td>
                </tr>
                <tr>
                    <th>Program Studi</th>
                    <td>{{ $dosen->programStudi->nama }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ ucfirst($dosen->status) }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
