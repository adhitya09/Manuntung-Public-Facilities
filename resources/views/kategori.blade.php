@extends('layouts.app')

@section('main')
    <section id="taman" class="taman section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Kategori</h2>
                <p>Kategori Fasilitas Umum<br></p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img src="assets/img/taman.png" class="img-fluid" alt="">
                        <h3>Taman</h3>
                        <p>Tempat untuk bersantai dan menikmati suasana alam kota. Cocok untuk jalan-jalan ringan atau
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

    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Tempat Di Balikpapan</h2>
        </div>

        <div class="location-grid">
            <!-- First Row -->
            <div class="row">
                <!-- Left side - Large Image -->
                <div class="col-md-6">
                    <div class="main-image">
                        <img src="assets/img/1.png" alt="Taman Bekapai" class="img-fluid">
                    </div>
                    <div class="view-more">
                        <p>Lihat Fasilitas Umum Lainnya</p>
                        <button class="btn btn-kategori">Kategori</button>
                    </div>
                </div>

                <!-- Right side - Text and Image -->
                <div class="col-md-6">
                    <div class="description">
                        <p>Taman Bekapai Adalah Fasilitas Publik Di Pusat Kota Balikpapan, Dibangun Dan Terwujudkan
                            Minyak. Terdapat Berbagai Fasilitas Umum Yang Menarik Dan Business Street Yang Membangkitkan
                            Semangat. Melihat, Dilengkapi Dengan Lampu Berwarna-Warna Dan Pancuran Air, Taman Ini
                            Memberikan Suasana Yang Menarik Dan Unik.</p>
                    </div>
                    <div class="secondary-image">
                        <img src="assets/img/2.png" alt="Multimedia Room" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Second Row -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="bottom-image">
                        <img src="assets/img/3.png" alt="Stadium" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
