<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MapController extends Controller
{
    public function getMapData()
    {
        $client = new Client();

        // Ambil data jalan dari Overpass API
        $response = $client->get('https://overpass-api.de/api/interpreter', [
            'query' => [
                'data' => '
                    [out:json];
                    (
                        way["highway"="motorway"];
                        way["highway"="primary"];
                        way["highway"="secondary"];
                        way["highway"="tertiary"];
                    );
                    out body;
                    >;
                    out skel qt;
                ',
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        // Simpan data GeoJSON sebagai file
        $geoJsonFile = storage_path('app/public/overpass_data.json');
        file_put_contents($geoJsonFile, json_encode($data));

        return response()->json($data);
    }

    public function dijkstra(Request $request)
    {
        // Ambil parameter dari query string
        $startLat = $request->query('start_lat');
        $startLng = $request->query('start_lng');
        $goalLat = $request->query('goal_lat');
        $goalLng = $request->query('goal_lng');

        // Validasi bahwa parameter ada
        if (empty($startLat) || empty($startLng) || empty($goalLat) || empty($goalLng)) {
            return response()->json(['error' => 'Missing parameters'], 400);
        }

        // Implementasikan algoritma Dijkstra di sini
        // Misalnya, menggunakan data koordinat statis atau data dari database

        // Contoh dummy route
        $route = [
            [$startLat, $startLng],
            [$goalLat, $goalLng]
        ];

        // Kirim data rute dalam format JSON
        return response()->json($route);
    }

    public function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371000; // Radius Bumi dalam meter

        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a = sin($dLat / 2) * sin($dLat / 2) +
            cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
            sin($dLon / 2) * sin($dLon / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return $earthRadius * $c; // Mengembalikan jarak dalam meter
    }

    public function findShortestPath($graph, $start, $goal)
    {
        // Implementasi algoritma Dijkstra untuk mencari rute tercepat
        $distances = [];
        $previous = [];
        $queue = new \SplPriorityQueue();

        foreach ($graph as $node => $edges) {
            $distances[$node] = INF;
            $previous[$node] = null;
            $queue->insert($node, INF);
        }
        $distances[$start] = 0;
        $queue->insert($start, 0);

        while (!$queue->isEmpty()) {
            $currentNode = $queue->extract();

            if ($currentNode == $goal) {
                break;
            }

            foreach ($graph[$currentNode] as $neighbor => $weight) {
                $alt = $distances[$currentNode] + $weight;
                if ($alt < $distances[$neighbor]) {
                    $distances[$neighbor] = $alt;
                    $previous[$neighbor] = $currentNode;
                    $queue->insert($neighbor, $alt);
                }
            }
        }

        // Menyusun rute berdasarkan simpul sebelumnya
        $path = [];
        for ($node = $goal; $node !== null; $node = $previous[$node]) {
            array_unshift($path, $node);
        }

        return $path;
    }
}
