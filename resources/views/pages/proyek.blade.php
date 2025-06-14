<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FolioFST - Hasil Proyek</title>
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
                            <h1>Hasil Proyek</h1>
                            <p>Fakultas Sains dan Teknologi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Portfolio Start -->
    <div class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Mahasiswa & Dosen</p>
                <h2>Hasil Proyek</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul id="portfolio-filter">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-1">Web Design</li>
                        <li data-filter=".filter-2">Mobile Apps</li>
                        <li data-filter=".filter-3">Game Dev</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
            @foreach ($proyek as $item)
                @php
                    $kategoriClass = match(strtolower($item->kategori)) {
                        'web design' => 'filter-1',
                        'mobile apps' => 'filter-2',
                        'game dev' => 'filter-3',
                        default => '',
                    };
                @endphp
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item {{ $kategoriClass }} wow fadeInUp" data-wow-delay="0.{{ $loop->iteration }}s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="{{ $item->foto }}" alt="{{ $item->judul }}" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="portfolio-text">
                            <h3>{{ $item->judul }}</h3>
                            <a class="btn" href="{{ $item->foto }}" data-lightbox="portfolio">+</a>
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
    @include('includes.script')
</body>
</html>
