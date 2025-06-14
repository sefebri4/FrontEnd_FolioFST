<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DevFolio - Developer Portfolio Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <?php include 'inc/head.php'; ?>

    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <!-- Nav Bar Start -->
        <?php include 'inc/navbar.php'; ?>

        <!-- Nav Bar End -->


        <!-- Hero Start --><!DOCTYPE html>
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
    <div class="about wow fadeInUp" id="about">
        <div class="container">
            <div class="row">
                <div class="col img-col">
                    <div class="about-img">
                        <img src="{{ asset('img/team-2.jpg') }}" alt="Foto Mahasiswa">
                    </div>
                </div>
                <div class="col content-col">
                    <div class="about-content">
                        <div class="section-header">
                            <p>Informasi Mahasiswa</p>
                            <h2>Nama Mahasiswa</h2>
                        </div>
                        <div class="about-text">
                            <p><strong>NIM:</strong> 2201001</p>
                            <p><strong>Program Studi:</strong> Sistem Informasi</p>
                            <p><strong>Email:</strong> mahasiswa@example.com</p>
                            <p><strong>Semester:</strong> 4</p>
                            <p><strong>IPK:</strong> 3.75</p>
                            <p><strong>Aktivitas:</strong> 
                                <ul>
                                    <li>Organisasi BEM</li>
                                    <li>Asisten Praktikum</li>
                                </ul>
                            </p>
                            <p><strong>Prestasi:</strong>
                                <ul>
                                    <li>Juara 1 Lomba UI/UX Nasional - 2023</li>
                                    <li>Finalis Data Science Challenge - 2022</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Biodata End -->

    <!-- Footer Start -->
    @include('includes.footer')
    <!-- Footer End -->

    @include('includes.preloader')
    @include('includes.script')

</body>
</html>

        <div class="hero" id="home">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-content">
                            <div class="hero-text">
                                <h1>Dr. Andi Wijaya, M.Kom</h1>
                                <p>Dosen</p>
                                <h2></h2>
                                <div class="typed-text">Rekayasa Perangkat Lunak</div>
                            </div>
                            <div class="hero-btn">
                                <a class="btn" href="">Kontak Saya</a>
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
                                <p>Tentang Saya</p>
                                <h2>Keahlian Saya</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                UI/UX Designer & Web Developer. Ahli dalam bidang kecerdasan buatan dan pengolahan data medis.
                                </p>
                            </div>
                            <div class="skills">
                                <div class="skill-name">
                                    <p>Web Design</p><p>85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p>Web Development</p><p>95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p>Apps Design</p><p>90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p>Apps Development</p><p>85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
        <!-- Service Start -->
        <div class="service" id="service">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Spesialisasi</p>
                    <h2>Spesialisasi  Saya</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <div class="service-text">
                                <h3>Web Design</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi facilis ornare velit non
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-laptop-code"></i>
                            </div>
                            <div class="service-text">
                                <h3>Web Development</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi facilis ornare velit non
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fab fa-android"></i>
                            </div>
                            <div class="service-text">
                                <h3>Apps Design</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi facilis ornare velit non
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fab fa-apple"></i>
                            </div>
                            <div class="service-text">
                                <h3>Apps Development</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi facilis ornare velit non
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
         <!-- Experience Start -->
        <div class="experience" id="experience">
            <div class="container">
                <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Resume</p>
                    <h2>Pengalaman Saya</h2>
                </header>
                <div class="timeline">
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2045 - 2050</div>
                            <h2>Web Developer</h2>
                            <h4>Soft Agency, San Francisco, CA</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2045 - 2050</div>
                            <h2>Web Developer</h2>
                            <h4>Soft Agency, San Francisco, CA</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2045 - 2050</div>
                            <h2>Web Developer</h2>
                            <h4>Soft Agency, San Francisco, CA</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2045 - 2050</div>
                            <h2>Web Developer</h2>
                            <h4>Soft Agency, San Francisco, CA</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2045 - 2050</div>
                            <h2>Web Developer</h2>
                            <h4>Soft Agency, San Francisco, CA</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2045 - 2050</div>
                            <h2>Web Developer</h2>
                            <h4>Soft Agency, San Francisco, CA</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Experience End -->



        <!-- Portfolio Start -->
        <div class="portfolio" id="portfolio">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Portfolio</p>
                    <h2>Portfolio Saya</h2>
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
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/portfolio-1.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>eCommerce Website</h3>
                                <a class="btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/portfolio-2.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Product Landing Page</h3>
                                <a class="btn" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/portfolio-3.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>JavaScript quiz game</h3>
                                <a class="btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/portfolio-4.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>JavaScript drawing</h3>
                                <a class="btn" href="img/portfolio-4.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/portfolio-5.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Social Mobile Apps</h3>
                                <a class="btn" href="img/portfolio-5.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="1s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/portfolio-6.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Company Website</h3>
                                <a class="btn" href="img/portfolio-6.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->
        


        <!-- Blog Start -->
        <div class="blog" id="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Prestasi</p>
                    <h2>Prestasi Saya</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Blog">
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Web Design</p>
                                    <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                    <p><i class="far fa-comments"></i>5</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus, ornare mattis nisl massa et eros vitae pulvin
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" alt="Blog">
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Apps Design</p>
                                    <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                    <p><i class="far fa-comments"></i>10</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus, ornare mattis nisl massa et eros vitae pulvin
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
        <?php include 'inc/footer.php'; ?>

        <!-- Footer End -->
        
        
        <?php include 'inc/preloader.php'; ?>


        
        <!-- JavaScript Libraries -->
        <?php include 'inc/script.php'; ?>

    </body>
</html>
