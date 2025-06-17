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

    <!-- Price Start -->
    <div class="price" id="price">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Fakultas Sains & Teknologi</p>
                <h2>Daftar Dosen</h2>
            </div>
            <div class="row">
                <!-- Sistem Informasi -->
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="price-item">
                        <div class="price-header">
                            <div class="price-title">
                                <h2>Information System</h2>
                            </div>
                            <div class="price-prices">
                                <h2>Sistem Informasi</h2>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price-description">
                                <ul>
                                    <li>Menggabungkan teknologi dan bisnis untuk merancang serta mengelola sistem informasi perusahaan.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-footer">
                            <div class="price-action">
                                <a class="btn" href="{{ route('dosen.si') }}">Lihat Dosen</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rekayasa Perangkat Lunak -->
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="price-item featured-item">
                        <div class="price-header">
                            <div class="price-title">
                                <h2>Software Engineering</h2>
                            </div>
                            <div class="price-prices">
                                <h2>Rekayasa Perangkat Lunak</h2>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price-description">
                                <ul>
                                    <li>Fokus pada pengembangan perangkat lunak berkualitas melalui metode rekayasa perangkat lunak modern.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-footer">
                            <div class="price-action">
                                <a class="btn" href="{{ route('dosen.rpl') }}">Lihat Dosen</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informatika -->
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="price-item">
                        <div class="price-header">
                            <div class="price-title">
                                <h2>Informatics</h2>
                            </div>
                            <div class="price-prices">
                                <h2>Informatika</h2>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price-description">
                                <ul>
                                    <li>Mempelajari dasar dan penerapan ilmu komputer, dari algoritma hingga kecerdasan buatan.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-footer">
                            <div class="price-action">
                                <a class="btn" href="{{ route('dosen.if') }}">Lihat Dosen</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Price End -->

    @include('includes.footer')
    @include('includes.preloader')
    @include('includes.script')
</body>
</html>
