<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function showTrackingPage()
    {
        $title = 'Tracking Taman Adipura';
        return view('tracking-taman-adipura', compact('title'));
    }

    public function calculateRoute(Request $request)
    {
        $userLatitude = $request->input('latitude');
        $userLongitude = $request->input('longitude');

        // Koordinat ITK dan Taman Adipura
        $itk = ['latitude' => -1.256, 'longitude' => 116.832];
        $tamanAdipura = ['latitude' => -1.264, 'longitude' => 116.831];

        // Tentukan jalur dari user -> ITK -> Taman Adipura
        $route = $this->calculateDijkstraRoute($itk, $tamanAdipura, $userLatitude, $userLongitude);

        return response()->json(['routeCoordinates' => $route]);
    }

    private function calculateDijkstraRoute($itk, $tamanAdipura, $userLatitude, $userLongitude)
    {
        // Tentukan koordinat untuk rute yang perlu dihitung
        $coordinates = [
            [$userLatitude, $userLongitude],
            [$itk['latitude'], $itk['longitude']],
            [$tamanAdipura['latitude'], $tamanAdipura['longitude']]
        ];

        return $coordinates;
    }
}
