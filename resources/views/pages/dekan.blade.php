<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FolioFST - Dekan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Profil Dekan Fakultas Sains dan Teknologi" name="keywords">
    <meta content="Profil Dekan Fakultas Sains dan Teknologi" name="description">

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
                            <h1>{{ $dekan->nama ?? 'Nama Dekan' }}, {{ $dekan->gelar ?? '' }}</h1>
                            <p>Dekan</p>
                            <div class="typed-text">Fakultas Sains dan Teknologi</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="{{ $dekan->foto ? asset('storage/berita/' . $dekan->foto) : asset('img/hero.png') }}" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Sambutan Dekan Start -->
    <div class="banner wow zoomIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-header text-center">
                <h2>Sambutan Dekan</h2>
            </div>
            <div class="container banner-text">
                <p>
                    Selamat datang di Fakultas Sains dan Teknologi. Kami berkomitmen untuk menjadi pusat unggulan dalam pendidikan, penelitian, dan pengabdian kepada masyarakat yang berlandaskan nilai-nilai integritas dan inovasi. Mari bersama-sama membangun masa depan yang berkelanjutan melalui ilmu pengetahuan dan teknologi.
                </p>
            </div>
        </div>
    </div>
    <!-- Sambutan Dekan End -->

    <!-- Visi Misi Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('img/dekan.png') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header text-left">
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
                                 kedalaman spiritual, kemanusiaan, intelektual, 
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
                                 dharma perguruan tinggi.<br><br>
                                5. Menyelenggarakan dan mengembangkan tata Kelola fakultas 
                                modern, berkualitas dan kondusif untuk mewujudkan pendidikan 
                                sains dan teknologi yang transformatif.                             
                            </p>
                        </div>

                        <div class="section-header text-left">
                            <h2>Kontak</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Email: {{ $dekan->email ?? 'dekan@fst-univ.ac.id' }} <br>
                                Telepon: {{ $dekan->telepon ?? '(021) 1234 5678' }}<br>
                                Alamat: {{ $dekan->alamat ?? 'Fakultas Sains dan Teknologi, Universitas Contoh, Jl. Ilmu No. 45, Jakarta' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    @include('includes.footer')
    <!-- Footer End -->

    @include('includes.preloader')
    @include('includes.script')

</body>
</html>
