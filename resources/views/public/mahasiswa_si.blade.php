<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FolioFST - Mahasiswa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    @include('public.includes.head')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="51">

    @include('public.includes.navbar')

    <!-- Hero Start -->
    <div class="hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <h1>Mahasiswa</h1>
                            <p>Fakultas Sains dan Teknologi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Team Start -->
    <div class="team" id="team">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Daftar Mahasiswa</p>
                <h2>Sistem Informasi</h2>
            </div>
            <div class="row">
                @foreach ($mahasiswa as $mhs)
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ $mhs->foto_url ?? asset('img/default.png') }}" alt="Foto">
                        </div>
                        <div class="team-text">
                            <h2>{{ $mhs->nama }}</h2>
                            <h4>Mahasiswa</h4>
                            <p>
                                Merupakan Mahasiswa <br>
                                {{ $mhs->programStudi->nama ?? '-' }} <br>
                                Angkatan {{ $mhs->angkatan }}
                            </p>
                            <div class="team-social">
                                <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-btn">
                                <a class="btn" href="#">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $mahasiswa->links() }}
            </div>
        </div>
    </div>
    <!-- Team End -->

    @include('public.includes.footer')
    @include('public.includes.preloader')
    @include('public.includes.script')

</body>
</html>
