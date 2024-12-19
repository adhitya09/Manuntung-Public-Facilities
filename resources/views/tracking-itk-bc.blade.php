@extends('layouts.app')

@section('main')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- Include Leaflet routing machine if you need it -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <section id="taman" class="taman section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>ITK Plaza Balikpapan</h2>
                <p>ITK -> Balikpapan Trade Center</p>
            </div>

            <div class="row">
                <div id="route-buttons" style="margin: 10px; text-align: center;"></div>
                <div id="map" style="height: 500px; width: 100%;"></div>

            </div>
        </div>
    </section>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <!-- Include Leaflet routing machine if you need it -->
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script>
        let map = L.map('map').setView([-1.2384419627626984, 116.85477069498187], 13);
        let latLng1 = L.latLng(-1.1497564186701215, 116.86277368036906);
        let latLng2 = L.latLng(-1.2787107062412486, 116.83928600735167);
        let wp1 = new L.Routing.Waypoint(latLng1);
        let wp2 = new L.Routing.Waypoint(latLng2);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.Routing.control({
            waypoints: [latLng1, latLng2]
        }).addTo(map);

        let routeUs = L.Routing.osrmv1();
        routeUs.route([wp1, wp2], (err, routes) => {
            if (!err) {
                let best = 100000000000000;
                let bestRoute = 0;
                for (i in routes) {
                    if (routes[i].summary.totalDistance < best) {
                        bestRoute = i;
                        best = routes[i].summary.totalDistance;
                    }
                }
                console.log('best route', routes[bestRoute]);
                L.Routing.line(routes[bestRoute], {
                    styles: [{
                        color: 'green',
                        weight: '10'
                    }]
                }).addTo(map);

            }


        })
    </script>
@endsection
