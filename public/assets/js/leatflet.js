// var map = L.map('map').setView([{{ $userLocation['latitude'] }}, {{ $userLocation['longitude'] }}], 13);

//         // Tambahkan tile layer
//         L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
//             maxZoom: 19
//         }).addTo(map);

//         // Tambahkan rute ke map
//         var routeCoordinates = {!! json_encode($route) !!};
//         var polyline = L.polyline(routeCoordinates, {color: 'blue'}).addTo(map);

//         // Pusatkan map pada rute
//         map.fitBounds(polyline.getBounds());
