@extends('layouts.app')

@section('main')
    <section id="taman" class="taman section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Taman Adipura</h2>
                <p>Lokasi Anda -> Taman Adipura</p>
            </div>

            <div class="row">
                <div id="map" style="height: 500px; width: 100%;"></div>
            </div>
        </div>
    </section>
    {{-- <script>
        // Inisialisasi peta dengan koordinat pengguna
        var map = L.map('map').setView([{{ $userLocation['latitude'] }}, {{ $userLocation['longitude'] }}], 13);

        // Tambahkan tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19
        }).addTo(map);

        // Pastikan $route dari server sudah berbentuk array JSON yang valid.
        // Convert $route ke JavaScript array.
        var routeCoordinates = {!! json_encode($route) !!};

        // Pastikan routeCoordinates berisi array koordinat yang valid, misalnya:
        // routeCoordinates = [[latitude1, longitude1], [latitude2, longitude2], ...]

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
@endsection
