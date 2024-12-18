@extends('layouts.app')

@section('main')
    <section id="taman" class="taman section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Taman</h2>
                <p>Navigasi Cerdas untuk Fasilitas Umum di Balikpapan</p>
            </div>

            <div class="row">
                <!-- Taman Bekapai -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img src="assets/img/1.png" class="card-img-top" alt="Taman Bekapai">
                        <div class="card-body">
                            <h5 class="card-title">Taman Bekapai</h5>
                            <div class="park-details">
                                <p><i class="bi bi-clock"></i> Buka 24 jam</p>
                                <p><i class="bi bi-geo-alt"></i> Jl. Jenderal Sudirman No.86, RT.11, Damai, Kec.
                                    Balikpapan, Kalimantan Timur 76114</p>
                            </div>
                            <div class="tracking-button">
                                <a href="#" class="btn-tracking">
                                    <img src="assets/img/titik.png" alt="Tracking Icon" class="tracking-icon">
                                    TRACKING
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Taman Tiga Generasi -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <img src="assets/img/ttg.jpeg" class="card-img-top" alt="Taman Tiga Generasi">
                        <div class="card-body">
                            <h5 class="card-title">Taman Tiga Generasi</h5>
                            <div class="park-details">
                                <p><i class="bi bi-clock"></i> Buka 24 jam</p>
                                <p><i class="bi bi-geo-alt"></i> Jl. Jermuri 1 Sepinggan, Kecamatan Balikpapan Selatan,
                                    Kota Balikpapan</p>
                            </div>
                            <div class="tracking-button">
                                <a href="#" class="btn-tracking">
                                    <img src="assets/img/titik.png" alt="Tracking Icon" class="tracking-icon">
                                    TRACKING
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Taman Adipura -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <img src="assets/img/adipura.jpg" class="card-img-top" alt="Taman Adipura">
                        <div class="card-body">
                            <h5 class="card-title">Taman Adipura</h5>
                            <div class="park-details">
                                <p><i class="bi bi-clock"></i> Buka 24 jam</p>
                                <p><i class="bi bi-geo-alt"></i> Jl. P. Antasari, Karang Rejo, Kota Balikpapan,
                                    Kalimantan Timur 76113</p>
                            </div>
                            <div class="tracking-button">
                                <a href="" class="btn-tracking">
                                    <img src="assets/img/titik.png" alt="Tracking Icon" class="tracking-icon">
                                    TRACKING
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
