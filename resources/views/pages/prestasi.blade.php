<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FolioFST - Prestasi</title>
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
    <div class="blog" id="blog">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Prestasi Unggulan</p>
                <h2>Mahasiswa & Dosen Berprestasi</h2>
            </div>
            <div class="row">
            @foreach($prestasi as $item)
                <div class="col-lg-6">
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.{{ $loop->iteration }}s">
                        <div class="blog-img">
                            <img src="{{ $item->foto }}" alt="Foto Prestasi">
                        </div>
                        <div class="blog-text">
                            <h2>{{ $item->judul }}</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-user"></i> {{ $item->nim ? 'Mahasiswa' : 'Dosen' }}</p>
                                <p><i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</p>
                            </div>
                            <p>{{ Str::limit($item->deskripsi, 150, '...') }}</p>
                            <a class="btn" href="{{ url('prestasi/'.$item->id) }}">Selengkapnya <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        </div>
    </div>
    <!-- Blog End -->

    <!-- Footer Start -->
    @include('includes.footer')
    <!-- Footer End -->

    @include('includes.preloader')
    @include('includes.script')
</body>
</html>
