<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FolioFST - Prestasi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Prestasi FST" name="keywords">
    <meta content="Prestasi FST" name="description">

    @include('includes.head')
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Nav Bar Start -->
    @include('includes.navbar')
    <!-- Nav Bar End -->

    <!-- Hero Start -->
    <div class="hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <h1>Prestasi</h1>
                            <p>Fakultas Sains dan Teknologi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Blog Start -->
    <div class="about wow fadeInUp" id="about">
        <div class="container">
            <div class="row">
                <div class="col img-col">
                    <div class="about-img">
                        <img src="{{ $data->foto }}" alt="Foto Prestasi" style="width:100%; max-height:400px; object-fit:cover;">
                    </div>
                </div>
                <div class="col content-col">
                    <div class="about-content">
                        <div class="section-header">
                            <p>{{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('d F Y') }}</p>
                            <h2>{{ $data->judul }}</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                {!! nl2br(e($data->deskripsi)) !!}
                            </p>
                            @if($data->nim)
                                <p><strong>Diperoleh oleh Mahasiswa:</strong> {{ $data->mahasiswa->nama ?? 'NIM: '.$data->nim }}</p>
                            @elseif($data->nidn)
                                <p><strong>Diperoleh oleh Dosen:</strong> {{ $data->dosen->nama ?? 'NIDN: '.$data->nidn }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    @include('includes.footer')
    <!-- Footer End -->

    @include('includes.preloader')
    @include('includes.script')
</body>
</html>
