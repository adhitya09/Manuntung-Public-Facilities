@extends('layouts.app')
@section('main')
    <main class="main">
        @if ($errors->any())
            <div class="text-red-500 text-sm">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h1>Sistem untuk kebutuhan fasilitas publik di Balikpapan</h1>
                        <p>Manuntung Public Facilities: Simpel, cepat, dan praktis.</p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-6 hero-img">
                        <img src="assets/img/maps.png" class="img-fluid" alt="Map with route icons">
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container" style="max-width: 1200px; margin: auto; padding: 20px;">
                <!-- Gambar Header -->
                <div class="header-container"
                    style="
            position: relative;
            text-align: center;
            border-radius: 92px;
            overflow: hidden;
            max-width: 70%;
            margin: 0 auto;
        ">
                    <img src="assets/img/header.png" class="img-fluid rounded" alt="Balikpapan Kota Beriman"
                        style="width: 100%; display: block; border-radius: 800px;" />

                    <!-- Teks di atas gambar -->
                    <div
                        style="
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            padding: 5px;
            background: rgb(255, 248, 248);
            border-radius: 32px;
            text-align: center;
            z-index: 10;
            ">
                        <h1 style="color: #007bff;">Halo Warga Balikpapan!</h1>
                        <p style="font-size: 1.2rem; color: #6c757d;">
                            Navigasi Cerdas untuk Fasilitas Umum di Balikpapan
                        </p>
                    </div>


                </div>
            </div>
        </section>

        <!-- Alt Features Section -->
        <section id="alt-features" class="alt-features section">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Teks di sebelah kiri -->
                    <div class="col-lg-7 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h2 style="font-size: 2.5rem; font-weight: bold;">MANUNTUNG PUBLIC FACILITIES</h2>
                            <p style="font-size: 1.25rem; line-height: 1.8;">
                                Aplikasi yang mempermudah pengguna untuk melacak lokasi fasilitas umum di Kota
                                Balikpapan.
                                Dengan aplikasi ini, pengguna dapat mengetahui lokasi keberadaan mereka dan arah menuju
                                fasilitas umum
                                langsung dari layar ponsel mereka.
                            </p>
                        </div>
                    </div>

                    <!-- Gambar di sebelah kanan -->
                    <div class="col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/maps.png" class="img-fluid" alt="Maps Image"
                            style="max-width: 100%; height: auto;">
                    </div>

                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section id="values" class="values section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kategori</h2>
                <p>Kategori Fasilitas Umum<br></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="assets/img/taman.png" class="img-fluid" alt="">
                            <h3>Taman</h3>
                            <p>Tempat untuk bersantai dan menikmati suasana alam kota. Cocok untuk jalan-jalan ringan
                                atau
                                sekadar duduk santai.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="assets/img/gym.png" class="img-fluid" alt="">
                            <h3>Sarana Olahraga</h3>
                            <p>Fasilitas olahraga yang bisa digunakan warga, termasuk lapangan dan area kebugaran untuk
                                aktivitas fisik.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <img src="assets/img/buku.png" class="img-fluid" alt="">
                            <h3>Perpustakaan/Taman Baca</h3>
                            <p>Tempat untuk membaca dan menambah wawasan dengan suasana tenang serta pilihan buku yang
                                beragam.</p>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>

        </section><!-- /Values Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Jumlah Pemakai Aplikasi</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-journal-richtext color-orange flex-shrink-0" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Jumlah Tracking</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-headset color-green flex-shrink-0" style="color: #15be56;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Support Aplikasi</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-people color-pink flex-shrink-0" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Akun Terdaftar</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section>

        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>Jl. Jenderal Sudirman No.1</p>
                                    <p>Balikpapan, 76112</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="500">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday</p>
                                    <p>8:00 - 17:00 WITA</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>(0542) 421500</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>adminkota@balikpapan.go.id</p>
                                </div>
                            </div><!-- End Info Item -->

                            <!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="">
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button class="btn-outline" type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>
@endsection
