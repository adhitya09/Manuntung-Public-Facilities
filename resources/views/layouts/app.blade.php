<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $title }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Manuntung Public Facilities">
    <meta name="keywords" content="MPF">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    {{-- Leatflet JS --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="index-page">
    @include('layouts.partials.navbar')
    <main class="main">
        @yield('main')
    </main>
    @include('layouts.partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- Leatflet JS --}}
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="{{ asset('assets/js/leatflet.js') }}"></script>

    {{-- <script>
        // Inisialisasi peta dengan koordinat pengguna
        var map = L.map('map').setView([{{ $userLocation['latitude'] }}, {{ $userLocation['longitude'] }}], 13);

        // Tambahkan tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19
        }).addTo(map);

        // Pastikan $route dari server sudah berbentuk array JSON yang valid.
        var routeCoordinates = {!! json_encode($route) !!};

        if (Array.isArray(routeCoordinates) && routeCoordinates.length > 0) {
            // Tambahkan rute ke map
            var polyline = L.polyline(routeCoordinates, {
                color: 'blue'
            }).addTo(map);

            // Pusatkan map pada rute
            map.fitBounds(polyline.getBounds());
        } else {
            console.error('Route coordinates tidak valid.');
        }
    </script> --}}

    <script>
        // Koordinat Taman Adipura (Tujuan)
        var goalLat = -1.2537565056619902;
        var goalLng = 116.83849830099844;

        // Ambil lokasi pengguna menggunakan geolocation
        navigator.geolocation.getCurrentPosition(function(position) {
            var startLat = position.coords.latitude;
            var startLng = position.coords.longitude;

            // Inisialisasi peta dengan lokasi pengguna
            var map = L.map('map').setView([startLat, startLng], 13);

            // Tambahkan tile layer OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19
            }).addTo(map);

            // Tambahkan marker untuk lokasi pengguna
            L.marker([startLat, startLng]).addTo(map)
                .bindPopup("Lokasi Anda")
                .openPopup();

            // Tambahkan marker untuk tujuan (Taman Adipura)
            L.marker([goalLat, goalLng]).addTo(map)
                .bindPopup("Taman Adipura")
                .openPopup();

            // Rute antara lokasi pengguna dan tujuan (Taman Adipura)
            var routeCoordinates = [
                [startLat, startLng],
                [goalLat, goalLng]
            ];

            // Gambar polyline di peta
            var polyline = L.polyline(routeCoordinates, {
                color: 'blue'
            }).addTo(map);

            // Sesuaikan tampilan peta untuk mencakup rute
            map.fitBounds(polyline.getBounds());
        }, function(error) {
            alert("Gagal mendapatkan lokasi Anda.");
        });
    </script>

</body>

</html>
