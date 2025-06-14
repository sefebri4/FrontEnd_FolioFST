<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FolioFST - Dosen</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

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
                            <h1>Dosen</h1>
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
                <p>Daftar Dosen</p>
                <h2>Rekayasa Perangkat Lunak</h2>
            </div>
            <div class="row">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.{{ $i }}s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/team-' . $i . '.jpg') }}" alt="Dosen {{ $i }}">
                            </div>
                            <div class="team-text">
                                <h2>Nama Dosen</h2>
                                <h4>Dosen</h4>
                                <p>
                                    Merupakan Dosen <br>
                                    Rekayasa Perangkat Lunak <br>
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
                @endfor
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
    @include('includes.footer')
    <!-- Footer End -->

    @include('includes.preloader')
    @include('includes.script')
</body>
</html>
