@extends('layouts.app')

@section('main')
    <section id="taman" class="taman section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Taman Bekapai</h2>
                <p>Lokasi Anda -> Taman Bekapai</p>
            </div>

            <div class="row">
                <div id="route-buttons" style="margin: 10px; text-align: center;"></div>
                <div id="map" style="height: 500px; width: 100%;"></div>

            </div>
        </div>
    </section>
    <script>
        // Lokasi tujuan (Taman Bekapai)
        var goalLat = -1.2767367907026528;
        var goalLng = 116.83431369147047;

        // Ambil lokasi pengguna menggunakan Geolocation API
        navigator.geolocation.getCurrentPosition(function(position) {
            var startLat = position.coords.latitude;
            var startLng = position.coords.longitude;

            // Inisialisasi peta dengan lokasi pengguna sebagai pusat
            var map = L.map('map').setView([startLat, startLng], 13);

            // Tambahkan tile layer OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Buat titik awal dan tujuan sebagai Waypoint
            var latLng1 = L.latLng(startLat, startLng);
            var latLng2 = L.latLng(goalLat, goalLng);
            var wp1 = new L.Routing.Waypoint(latLng1);
            var wp2 = new L.Routing.Waypoint(latLng2);

            // Tambahkan marker untuk lokasi pengguna
            L.marker(latLng1).addTo(map)
                .bindPopup("Lokasi Anda")
                .openPopup();

            // Tambahkan marker untuk lokasi tujuan
            L.marker(latLng2).addTo(map)
                .bindPopup("Taman Bekapai")
                .openPopup();

            // Tambahkan kontrol routing dengan waypoints
            L.Routing.control({
                waypoints: [latLng1, latLng2],
                routeWhileDragging: false
            }).addTo(map);

            // Panggil rute dari OSRM
            let routeUs = L.Routing.osrmv1();
            routeUs.route([wp1, wp2], (err, routes) => {
                if (!err) {
                    let best = Infinity;
                    let bestRoute = 0;

                    // Cari rute terbaik berdasarkan jarak terpendek
                    for (let i in routes) {
                        if (routes[i].summary.totalDistance < best) {
                            bestRoute = i;
                            best = routes[i].summary.totalDistance;
                        }
                    }

                    console.log('Rute terbaik:', routes[bestRoute]);

                    // Gambar rute terbaik di peta
                    L.Routing.line(routes[bestRoute], {
                        styles: [{
                            color: 'green',
                            weight: 10
                        }]
                    }).addTo(map);

                    // Sesuaikan tampilan peta untuk mencakup rute
                    map.fitBounds(L.polyline(routes[bestRoute].coordinates).getBounds());
                } else {
                    console.error('Error mendapatkan rute:', err);
                }
            });
        }, function(error) {
            alert("Gagal mendapatkan lokasi Anda. Pastikan izin lokasi diaktifkan.");
        });
    </script>
@endsection
