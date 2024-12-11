<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function showRoute(Request $request)
    {
        // Ambil lokasi user (misalnya dari request atau default)
        $userLocation = [
            'latitude' => $request->input('latitude', -1.26714), // Default: ITK
            'longitude' => $request->input('longitude', 116.83156), // Default: ITK
        ];

        // Ambil data graph dari storage
        $graphPath = storage_path('app/graph.json');
        $graph = json_decode(file_get_contents($graphPath), true);

        // Jalankan algoritma Dijkstra
        $dijkstra = new \App\Services\Dijkstra($graph);
        $route = $dijkstra->shortestPath('ITK', 'Taman Adipura');

        // Kirim data ke view
        return view('tracking-taman-adipura', [
            'userLocation' => $userLocation,
            'route' => $route,
            'title' => 'Tracking Taman Adipura - Manuntung Public Facilities'
        ]);
    }
}
