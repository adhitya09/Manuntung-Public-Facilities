@extends('layouts.app')

@section('main')
    <section id="taman" class="taman section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>About</h2>
                {{-- <p>Manuntung Public Facilities</p> --}}
            </div>

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
@endsection
