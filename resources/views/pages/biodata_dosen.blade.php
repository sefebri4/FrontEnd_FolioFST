<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FolioFST - Biodata Dosen</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Profil Dosen Fakultas Sains dan Teknologi" name="keywords">
    <meta content="Profil Dosen Fakultas Sains dan Teknologi" name="description">

    @include('includes.head')
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">

    @include('includes.navbar')

    <!-- Hero per Dosen -->
    @foreach ($dosens as $dosen)
    <div class="hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <h1>{{ $dosen->nama }}, {{ $dosen->gelar }}</h1>
                            <p>Dosen</p>
                            <div class="typed-text">{{ $dosen->bidang_keahlian }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="{{ $dosen->foto ?? asset('img/default.png') }}" alt="Foto Dosen">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail Biodata Dosen -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ $dosen->foto ?? asset('img/default.png') }}" alt="Foto Dosen">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header text-left">
                            <h2>Profil Singkat</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                <strong>Nama:</strong> {{ $dosen->nama }} <br>
                                <strong>Gelar:</strong> {{ $dosen->gelar }} <br>
                                <strong>Bidang Keahlian:</strong> {{ $dosen->bidang_keahlian }} <br>
                                <strong>Email:</strong> {{ $dosen->email }} <br>
                                <strong>Telepon:</strong> {{ $dosen->telepon }} <br>
                                <strong>Alamat:</strong> {{ $dosen->alamat }} <br>
                                <strong>Program Studi:</strong> {{ $dosen->programStudi->nama ?? '-' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @include('includes.footer')
    @include('includes.preloader')
    @include('includes.script')

</body>
</html>
