<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FolioFST - Biodata Mahasiswa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    @include('includes.head')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="51">

    @include('includes.navbar')

    <!-- Hero Start -->
    <div class="hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <h1>Biodata Mahasiswa</h1>
                            <p>Fakultas Sains dan Teknologi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Biodata Start -->
    <div class="team" id="biodata">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Detail Mahasiswa</p>
                <h2>{{ $mahasiswa->nama }}</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="team-item text-center">
                        <div class="team-img">
                            <img src="{{ $mahasiswa->foto_url ?? asset('img/default.png') }}" alt="Foto Mahasiswa">
                        </div>
                        <div class="team-text">
                            <h2>{{ $mahasiswa->nama }}</h2>
                            <h4>{{ $mahasiswa->nim }}</h4>
                            <p>
                                Program Studi: {{ $mahasiswa->programStudi->nama ?? '-' }}<br>
                                Angkatan: {{ $mahasiswa->angkatan }}<br>
                                Email: {{ $mahasiswa->email ?? '-' }}
                            </p>
                            <div class="team-social">
                                <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-btn mt-3">
                                <a href="{{ route('mahasiswa.if') }}" class="btn">Kembali ke Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')
    @include('includes.preloader')
    @include('includes.script')

</body>
</html>
