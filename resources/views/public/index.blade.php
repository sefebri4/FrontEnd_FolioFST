<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>FolioFST</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        @include('public.includes.head')
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
    {{-- Navbar --}}
    @include('public.includes.navbar')


        <!-- Hero Start -->
        <div class="hero" id="home">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-content">
                            <div class="hero-text">
                                <p>Selamat Datang di</p>
                                <h1>Fakultas Sains dan Teknologi</h1>
                                <h2></h2>
                                <div class="typed-text">Sistem Informasi, Informatika, Rekayasa Perangkat Lunak </div>
                            </div>
                            <div class="hero-btn">
                                <a class="btn" href="">Hire Me</a>
                                <a class="btn" href="">Contact Me</a>
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
        <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header text-left">
                                <p>Tentang Kami</p>
                                <h2>Visi</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Fakultas yang unggul pada tingkat global dalam mengelola 
                                    bidang ilmu komputer, berorientasi global, menjunjung 
                                    tinggi nilai-nilai integritas dan bersemangat kebhinekaan 
                                    untuk berkontribusi nyata bagi pembangunan masyarakat 
                                    Indonesia yang semakin bermartabat.                                
                                </p>
                            </div>
                            <div class="section-header text-left">
                                <h2>Misi</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    1. Menyelenggarakan pendidikan transformatif dalam bidang sains
                                     dan teknologi untuk menghasilkan lulusan yang memiliki 
                                     kedalaman spriritual, kemanusiaan, intelektual, 
                                     profesionalitas, dan ramah lingkungan sesuai kebutuhan 
                                     masyarakat dan industri. <br><br>
                                    2. Menyelenggarakan penelitian di bidang sains dan teknologi 
                                    yang kreatif, inovatif, dan relevan dengan kebutuhan masyarakat
                                     dan industri serta berdampak transformatif bagi masyarakat.<br><br>
                                    3. Menyelenggarakan pengabdian pada masyarakat sebagai bentuk 
                                    pemberdayaan sains dan teknologi yang memberikan kontribusi 
                                    transformatif bagi masyarakat.<br><br>
                                    4. Menjalin kerjasama dengan masyarakat, institusi, dan lembaga
                                     pemerintah maupun swasta untuk meningkatkan mutu kegiatan tri 
                                     dharma peguruan tinggi.<br><br>
                                    5. Menyelenggarakan dan mengembangkan tata Kelola fakultas 
                                    modern, berkualitas dan kondusif untuk mewujudkan pendidikan 
                                    sains dan teknologi yang transformatif.                             
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Banner Start -->
        <div class="banner wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Falkutas Sains dan Teknologi </h2>
                </div>
                <div class="container banner-text">
                    <p>
                        Fakultas Sains dan Teknologi Universitas Pignatelli Triputra 
                        (FST Upitra) merupakan fakultas baru yang didirikan pada proses 
                        alih bentuk atau penggabungan dari STIE Pignatelli Surakarta dan A
                        BA Pignatelli Surakarta, berdasarkan SK Nomor 3884/E1/HK.03.00/2022 
                        kedua perguruan tinggi tersebut telah berubah bentuk menjadi Universitas 
                        Pignatelli Triputra. Program Studi yang ada di Fakultas Sains dan Teknologi 
                        Universitas Pignatelli Triputra adalah Program Studi Sistem Informasi (S1), 
                        Program Studi Informatika (S1) dan Program Studi Rekayasa Perangkat Lunak (S1). 
                    </p>
                </div>
            </div>
        </div>
        <!-- Banner End -->
        
        <!-- Service Start -->
        <div class="service" id="service">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Fakultas Sains & Teknologi</p>
                    <h2>Program Studi Kami</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <div class="service-text">
                                <h3>Sistem Informasi</h3>
                                <p>
                                Menggabungkan teknologi dan bisnis untuk merancang serta mengelola 
                                sistem informasi perusahaan. Cocok untuk calon analis sistem atau 
                                manajer TI.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="service-text">
                                <h3>Rekayasa Perangkat Lunak</h3>
                                <p>
                                    Fokus pada pengembangan perangkat lunak berkualitas melalui 
                                    metode rekayasa perangkat lunak modern. Cocok untuk calon 
                                    developer Software dan project manager.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <div class="service-text">
                                <h3>Informatika</h3>
                                <p>
                                    Mempelajari dasar dan penerapan ilmu komputer, dari algoritma 
                                    hingga kecerdasan buatan. Cocok untuk IT Analis, Data Analis, 
                                    dan AI enthusiast.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        <!-- Team Start -->
        <div class="team" id="team">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Tenaga Pendidik</p>
                    <h2>Dekan & Kepala Prodi</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/dekan.png" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Moyo Hady P, S.Kom, M.Kom</h2>
                                <h4>Dekan</h4>
                                <p>
                                    Merupakan Dekan Fakultas Sains & Teknologi <br>
                                    Universitas Pignatelli Triputra
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/kaprodi_si.png" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Mawar Hardiyanti, S.Kom, M.Kom</h2>
                                <h4>Kaprodi Sistem Informasi</h4>
                                <p>
                                    Merupakan Kaprodi Sistem Informasi <br>
                                    Universitas Pignatelli Triputra 
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/kaprodi_rpl.png" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Tutus Praningki, S.Kom, M.Kom</h2>
                                <h4>Kaprodi RPL</h4>
                                <p>
                                    Merupakan Kaprodi Rekayasa Perangkat Lunak <br>
                                    Universitas Pignatelli Triputra 
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/kaprodi_if.png" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Endang Anggiratih, ST, M.Cs</h2>
                                <h4>Kaprodi Informatika</h4>
                                <p>
                                    Merupakan Kaprodi Informatika <br>
                                    Universitas Pignatelli Triputra 
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
                

        <!-- Price Start -->
        <div class="price" id="price">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Fakultas Sains & Teknologi</p>
                <h2>Daftar Mahasiswa</h2>
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
                                <a class="btn" href="{{ route('mahasiswa.si') }}">Lihat Mahasiswa</a>
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
                                <a class="btn" href="{{ route('mahasiswa.rpl') }}">Lihat Mahasiswa</a>
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
                                <a class="btn" href="{{ route('mahasiswa.if') }}">Lihat Mahasiswa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Price End -->

        <!-- Blog Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="section-title text-center position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Prestasi</h5>
                    <h1 class="mb-0">Prestasi Mahasiswa dan Dosen</h1>
                </div>

                <div class="row g-5">
                    @foreach ($prestasi as $item)
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('prestasi/' . $item->foto) }}" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="#">
                                    {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d M Y') }}
                                </a>
                            </div>
                            <div class="p-4">
                                <h4 class="mb-3">{{ $item->judul }}</h4>
                                <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 100) }}</p>
                                <a class="text-uppercase" href="{{ route('admin.prestasi.show', $item->id) }}">Lihat Detail <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="mt-5 d-flex justify-content-center">
                    {{ $prestasi->links() }}
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Portfolio Start -->
        <div class="portfolio" id="portfolio">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Momen Kegiatan</p>
                    <h2>Galeri FST</h2>
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
                    @foreach ($galeri as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-{{ ($loop->index % 3) + 1 }} wow fadeInUp" data-wow-delay="{{ ($loop->index % 4) * 0.2 }}s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="{{ $item->gambar_url ?? asset('img/default.jpg') }}" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>{{ $item->judul }}</h3>
                                <a class="btn" href="{{ $item->gambar_url ?? asset('img/default.jpg') }}" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $galeri->links() }}
                </div>
            </div>
        </div>
        <!-- Portfolio End -->
        
        
        <!-- Portfolio Start -->
        <div class="portfolio" id="portfolio">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Mahasiswa & Dosen</p>
                    <h2>Hasil Proyek</h2>
                </div>
                <div class="container-fluid py-5">
                    <div class="container">
                        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h5 class="section-title bg-white text-center text-primary px-3">Proyek</h5>
                            <h1 class="mb-4">Hasil Proyek Mahasiswa & Dosen</h1>
                        </div>
                        <div class="row g-4">
                            @forelse ($proyek as $item)
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="service-item rounded h-100 p-4">
                                        <div class="d-flex align-items-center mb-4">
                                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ $item->foto_url ?? asset('img/default.png') }}" alt="{{ $item->judul }}" style="width: 60px; height: 60px;">
                                            <div class="ms-4">
                                                <h5 class="mb-1">{{ $item->judul }}</h5>
                                                <p class="mb-0">
                                                    @if($item->mahasiswa)
                                                        {{ $item->mahasiswa->nama }}
                                                    @elseif($item->dosen)
                                                        {{ $item->dosen->nama }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <p>{{ \Illuminate\Support\Str::limit($item->deskripsi, 120) }}</p>
                                        <div class="d-flex justify-content-between">
                                            <span class="badge {{ $item->status_badge_class }}">{{ $item->status }}</span>
                                            <a class="btn btn-sm btn-primary" href="{{ route('admin.proyek.show', $item->id) }}">Lihat Detail</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-center">Belum ada data proyek yang tersedia.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->
        
        
        <!-- Banner Start -->
        <div class="banner wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Blog dan Seputar Informasi</h2>
                </div>
            </div>
        </div>
        <!-- Banner End -->
        

        <!-- Blog Start -->
        <div class="blog" id="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Blog Spot</p>
                    <h2>Blog dan Berita Terbaru</h2>
                </div>
                <div class="row">
                    @foreach ($berita as $item)
                        <div class="col-lg-6">
                            <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                                <div class="blog-img">
                                    <img src="{{ asset('storage/' . $item->gambar_url) }}" alt="Blog" class="img-fluid">
                                </div>
                                <div class="blog-text">
                                    <h2>{{ $item->judul }}</h2>
                                    <div class="blog-meta">
                                        <p><i class="far fa-user"></i> {{ $item->penulis ?? 'Admin' }}</p>
                                        <p><i class="far fa-calendar-alt"></i> {{ $item->tanggal_posting->format('d-m-Y') }}</p>
                                    </div>
                                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 200, '...') }}</p>
                                    <a class="btn" href="{{ route('berita.show', $item->id) }}">
                                        Read More <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Optional: Pagination --}}
                <div class="mt-4 d-flex justify-content-center">
                    {{ $berita->links() }}
                </div>
            </div>
        </div>
        <!-- Blog End -->
        

        
        <!-- Blog Start -->
        <div class="blog" id="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Informasi Terkini</p>
                    <h2>Kegiatan, Proyek, dan Beasiswa</h2>
                </div>
                <div class="row">
                    @foreach ($informasi as $item)
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="blog-img">
                                <img src="{{ $item->gambar_url ?? asset('img/default.jpg') }}" alt="Blog">
                            </div>
                            <div class="blog-text">
                                <h2>{{ $item->judul }}</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Informasi</p>
                                    <p><i class="far fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($item->tanggal_posting)->format('d-M-Y') }}</p>
                                    <p><i class="far fa-comments"></i>0</p>
                                </div>
                                <p>
                                    {{ Str::limit(strip_tags($item->isi), 150) }}
                                </p>
                                <a class="btn" href="{{ route('informasi.detail', $item->id) }}">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $informasi->links() }}
                </div>
            </div>
        </div>
        <!-- Blog End -->
        

        
        
        <!-- Testimonial Start -->
        <div class="testimonial wow fadeInUp" data-wow-delay="0.1s" id="review">
            <div class="container">
                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-3.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->



        
        <!-- Contact Start -->
        <div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        {{-- About End --}}

{{-- Footer --}}
@include('public.includes.footer')

{{-- Preloader --}}
@include('public.includes.preloader')

{{-- JavaScript Libraries --}}
@include('public.includes.script')
    </body>
</html>
