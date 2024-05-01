<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bubble Academy</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('Bootslander/assets/img/logo web1.png') }}" rel="icon">

    <link href="{{ asset('Bootslander/assets/img/logo web1.png') }}" rel="apple-touch-icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('Bootslander/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('Bootslander/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Bootslander/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('Bootslander/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('Bootslander/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('Bootslander/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('Bootslander/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('Bootslander/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html"><span>Bubble Academy</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#features">Features</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Tingkatkan kemahiran bahasa Inggris Anda dengan <span>Bubble Academy</span></h1>
                        <h2>Bersama-sama kita akan menjelajahi kedalaman bahasa dan membuka potensi penuh Anda!</h2>
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto">Login</a>
                        </div>
                    </div>
                </div>
               <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                   <img src="{{ asset ('Bootslander/assets/img/landing.png')  }}" class="img-fluid animated" alt="">
               </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                <div class="col-md-4" data-aos="fade-right">
                    <img src="{{ asset ('Bootslander/assets/img/about.png') }}" class="img-fluid" alt="">
                </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                        <h3>Tentang Bubble Academy</h3>
                        <p>Bubble Academy adalah lembaga bimbingan belajar bahasa Inggris yang dibangun dengan visi untuk menciptakan lingkungan belajar yang mendukung, inspiratif, dan efektif bagi siswa dari berbagai latar belakang. Berdiri sejak 24 Januari 2024, Bubble Academy telah menjadi destinasi pilihan bagi mereka yang ingin mengembangkan kemampuan bahasa Inggris mereka dengan percaya diri</p>


                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">Guru Profesional</a></h4>
                            <p class="description">Di Bubble Academy, kualitas pengajaran sangatlah penting. Oleh karena itu, kami merekrut guru-guru yang berkualitas, berpengalaman, dan berkomitmen tinggi untuk membantu setiap siswa mencapai potensi terbaik mereka dalam belajar bahasa Inggris. Guru-guru kami tidak hanya mengajar, tetapi juga menjadi mentormu dalam perjalanan pembelajaranmu.</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">Program Khusus</a></h4>
                            <p class="description">Kami menawarkan berbagai program khusus untuk memenuhi kebutuhan belajar individual. Ini termasuk persiapan ujian TOEFL, IELTS, atau tes kemampuan bahasa Inggris lainnya, serta kursus pengucapan, kelas tata bahasa intensif, dan banyak lagi.</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-atom"></i></div>
                            <h4 class="title"><a href="">Lingkungan Belajar yang Mendukung</a></h4>
                            <p class="description">Di Bubble Academy, kami percaya bahwa lingkungan belajar yang mendukung sangatlah penting untuk kesuksesan siswa. Oleh karena itu, kami menciptakan suasana yang ramah dan inklusif, di mana setiap siswa merasa didukung dan termotivasi untuk mencapai tujuan bahasa Inggris mereka.</p>

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Fasilitas</h2>
                    <p>Fasilitas yang ada</p>
                </div>

                <div class="row" data-aos="fade-left">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                            <i class="ri-store-line" style="color: #ffbb2c;"></i>
                            <h3><a href="">Ruang kelas yang nyaman</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                            <h3><a href="">Jadwal yang fleksibel </a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                            <h3><a href="">Buku pembelajaran</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                            <h3><a href="">Program belajar</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
                            <i class="ri-database-2-line" style="color: #47aeff;"></i>
                            <h3><a href="">Assesment akhir</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                            <h3><a href="">Sertifikat kursus</a></h3>
                        </div>
                    </div>
                   
                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row" data-aos="fade-up">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1890" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Murid</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="46" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Guru</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Program</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Galeri</h2>
                    <p>Cek galeri kami</p>
                </div>

                <div class="row g-0" data-aos="fade-left">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                            <a href="{{ asset('Bootslander/assets/img/dok1.jpeg') }}" class="gallery-lightbox">
                                <img src="{{ asset('Bootslander/assets/img/dok1.jpeg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                            <a href="{{ asset('Bootslander/assets/img/dok2.jpeg') }}" class="gallery-lightbox">
                                <img src="{{ asset('Bootslander/assets/img/dok2.jpeg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                            <a href="{{ asset('Bootslander/assets/img/dok3.jpeg') }}" class="gallery-lightbox">
                                <img src="{{ asset('Bootslander/assets/img/dok3.jpeg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                            <a href="assets/img/gallery/gallery-4.jpeg" class="gallery-lightbox">
                                <img src="{{ asset('Bootslander/assets/img/dok4.jpeg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                            <a href="{{ asset('Bootslander/assets/img/dok5.jpeg') }}" class="gallery-lightbox">
                                <img src="{{ asset('Bootslander/assets/img/dok5.jpeg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                            <a href="{{ asset('Bootslander/assets/img/dok6.jpeg') }}" class="gallery-lightbox">
                                <img src="{{ asset('Bootslander/assets/img/dok6.jpeg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                            <a href="{{ asset('Bootslander/assets/img/dok7.jpeg') }}" class="gallery-lightbox">
                                <img src="{{ asset('Bootslander/assets/img/dok7.jpeg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
                            <a href="{{ asset('Bootslander/assets/img/dok8.jpeg') }}" class="gallery-lightbox">
                                <img src="{{ asset('Bootslander/assets/img/dok8.jpeg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Michelle naey</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Saya sangat senang menjadi bagian dari Bubble Academy! Pengalaman belajar saya di sini sungguh luar biasa. Guru-gurunya sangat berpengalaman dan 
                                    peduli terhadap perkembangan siswa. Mereka tidak hanya mengajar dengan baik, tetapi juga memberikan dukungan tambahan di luar kelas. 
                                    Saya merasa lebih percaya diri dalam berbicara bahasa Inggris setelah bergabung dengan program ini. Terima kasih, Bubble Academy! 
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Farrel wilson</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Saya sangat puas dengan hasil yang saya capai setelah bergabung dengan Bubble Academy. Program pembelajarannya sangat terstruktur dan beragam, 
                                    mencakup berbagai topik dan keterampilan bahasa Inggris. Selain itu, fasilitas yang disediakan oleh Bubble Academy sangat nyaman dan mendukung proses belajar saya.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Aulia Melody</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Saya ingin merekomendasikan Bubble Academy kepada siapa pun yang ingin meningkatkan kemampuan bahasa Inggris mereka. Saya telah mencoba beberapa bimbingan belajar sebelumnya,
                                    tetapi Bubble Academy memberikan pengalaman yang berbeda. Mereka tidak hanya fokus pada pelajaran, tetapi juga memperhatikan aspek praktis bahasa Inggris seperti percakapan sehari-hari dan keterampilan berbicara.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Arselio Winata</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Saya sangat senang dengan pengalaman saya di Bubble Academy. Guru-guru di sini sangat ramah dan sabar dalam membantu saya memahami materi pembelajaran.
                                     <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>Chello Briandra</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Saya bertemu dengan banyak teman baru dan belajar dari pengalaman mereka, yang sangat membantu dalam meningkatkan keterampilan bahasa Inggris saya. Saya sangat berterima kasih kepada tim Bubble Academy atas dedikasi mereka dalam membantu siswa mencapai potensi terbaik mereka!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Harga</h2>
                    <p>Cek harga setiap program</p>
                </div>

                <div class="row" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <h3>Program Tingkat Dasar</h3>
                            <h4><sup>Rp.</sup>900.000<span> /3 month</span></h4>
                            <ul>
                                <li>Durasi 3 bulan</li>
                                <li>3 kali pertemuan per minggu</li>
                                <li>60 menit per pertemuan</li>
                                <li>Mendapatkan buku pembelajaran dan sertifikat</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Daftar</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                        <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
                            <h3>Program Intermediate</h3>
                            <h4><sup>Rp.</sup>1.200.000<span> /3 month</span></h4>
                            <ul>
                                <li>Durasi 3 bulan</li>
                                <li>3 kali pertemuan per minggu</li>
                                <li>90 menit per pertemuan</li>
                                <li>Mendapatkan buku pembelajaran dan sertifikat</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Daftar</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="300">
                            <h3>Program TOEFL</h3>
                            <h4><sup>Rp.</sup>1.500.000<span> /2 bulan</span></h4>
                            <ul>
                                <li>Durasi 2 bulan</li>
                                <li>3 kali pertemuan per minggu</li>
                                <li>120 menit per pertemuan</li>
                                <li>Mendapatkan buku pembelajaran dan sertifikat</li>
                                <li>Mendapatkan latihan soal dan assesment setiap 2 minggu sekali</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Daftar</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="400">
                            <span class="advanced">Advanced</span>
                            <h3>Program private</h3>
                            <h4><sup>Rp.</sup>1.800.000<span> /3 month</span></h4>
                            <ul>
                                <li>Durasi 3 bulan</li>
                                <li>3 kali pertemuan per minggu</li>
                                <li>120 menit per pertemuan</li>
                                <li>Bisa memilih tempat di rumah/ di tempat bimbingan</li>
                                <li>Mendapatkan buku pembelajaran dan sertifikat</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Daftar</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Kapan saya dapat mendaftar di Bubble Academy?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Pendaftaran dapat dilakukan kapan saja baik online maupun offline! Untuk pendaftaran online kamu bisa klik di sini . Sedangkan untuk pendaftaran offline kamu bisa langsung mengunjungi unit Bubble Acadmy pada hari Senin sampai Sabtu pukul 09.00 s.d 16.00.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apa yang membedakan Bubble Academy dari lembaga bimbingan belajar bahasa Inggris lainnya?? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                Bubble Academy menawarkan pendekatan pembelajaran yang terintegrasi, fokus pada pengembangan keterampilan berbicara, mendengarkan, membaca, dan menulis. Kami juga memberikan pengalaman belajar yang interaktif dan mendukung, dengan guru-guru berpengalaman dan kurikulum yang disesuaikan dengan kebutuhan siswa. 
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed"> Bagaimana kualifikasi guru-guru di Bubble Academy?? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                Guru-guru di Bubble Academy adalah para profesional yang berpengalaman dalam mengajar bahasa Inggris sebagai bahasa kedua. Mereka memiliki kualifikasi pendidikan yang sesuai dan sering mengikuti pelatihan untuk meningkatkan keterampilan mengajar mereka. Kami memastikan bahwa guru-guru kami memiliki pengetahuan mendalam tentang materi pelajaran dan kemampuan untuk menginspirasi dan mendukung siswa.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Apakah ada penilaian atau tes kemajuan selama program pembelajaran?? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                Ya, di Bubble Academy, kami melakukan penilaian secara berkala untuk mengukur kemajuan siswa dalam pembelajaran bahasa Inggris. Ini dapat berupa tes tertulis, percakapan langsung dengan guru, atau penugasan proyek. Penilaian ini membantu kami memantau kemajuan siswa dan menyesuaikan pembelajaran sesuai kebutuhan.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl. Kenanga No 112, Jakarta Pusat</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>bubbleacademy@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 88766543212</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Kirim pesan</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Bubble Academy</h4>
                        <p>"Membentuk Masa Depan dengan Bahasa."</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Bubble Academy</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset ('Bootslander/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset ('Bootslander/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset ('Bootslander/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset ('Bootslander/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset ('Bootslander/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset ('Bootslander/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset ('Bootslander/assets/js/main.js')}}"></script>

</body>

</html>
