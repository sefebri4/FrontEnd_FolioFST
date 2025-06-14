<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FolioFST - Home</title>
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
                            <p>Fakultas Sains dan Teknologi</p>
                            <h1>Universitas Pignatelli Triputra</h1>
                            <a class="btn" href="#about">Mulai</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="img/hero.png" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="about wow fadeInUp" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="img/about.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header text-left">
                            <p>Profil Fakultas</p>
                            <h2>Fakultas Sains dan Teknologi</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Fakultas Sains dan Teknologi merupakan salah satu fakultas di Universitas Pignatelli Triputra.
                                Fakultas ini memiliki beberapa program studi unggulan di bidang sains dan teknologi. Kami berkomitmen
                                untuk menghasilkan lulusan yang kompeten, berdaya saing tinggi, dan siap menghadapi tantangan global.
                            </p>
                        </div>
                        <a class="btn" href="#">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Portfolio Start -->
    <div class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Berita Terbaru</p>
                <h2>Informasi Kegiatan</h2>
            </div>
            <div class="row">
                @foreach($berita as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="{{ asset('storage/berita/' . $item->gambar) }}" alt="{{ $item->judul }}">
                        </div>
                        <div class="portfolio-text">
                            <h3>{{ $item->judul }}</h3>
                            <a class="btn" href="{{ route('berita.show', $item->id) }}">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Portfolio End -->

    <!-- Footer Start -->
    @include('includes.footer')
    <!-- Footer End -->

    @include('includes.preloader')

    <!-- JavaScript Libraries -->
    @include('includes.script')
</body>
</html>
