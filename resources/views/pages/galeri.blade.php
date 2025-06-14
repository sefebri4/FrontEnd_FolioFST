<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FolioFST - Galeri</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Galeri Kegiatan FST" name="keywords">
    <meta content="Galeri Kegiatan Fakultas Sains dan Teknologi" name="description">

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
                            <h1>Galeri</h1>
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
                <p>Momen Kegiatan</p>
                <h2>Galeri FST</h2>
            </div>

            {{-- Optional filter, bisa dihapus jika belum digunakan --}}
            <!--
            <div class="row">
                <div class="col-12">
                    <ul id="portfolio-filter">
                        <li data-filter="*" class="filter-active">Semua</li>
                        <li data-filter=".filter-kegiatan">Kegiatan</li>
                        <li data-filter=".filter-prestasi">Prestasi</li>
                    </ul>
                </div>
            </div>
            -->

            <div class="row portfolio-container">
                @foreach($galeri as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item wow fadeInUp" data-wow-delay="0.{{ $loop->index % 5 }}s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="{{ $item->gambar }}" alt="{{ $item->judul }}" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="portfolio-text">
                            <h3>{{ $item->judul }}</h3>
                            <a class="btn" href="{{ $item->gambar }}" data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
                @endforeach

                @if($galeri->isEmpty())
                    <div class="col-12 text-center">
                        <p>Tidak ada data galeri tersedia.</p>
                    </div>
                @endif
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
