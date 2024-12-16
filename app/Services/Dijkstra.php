<?php

namespace App\Services;

class Dijkstra
{
    protected $graph;

    public function __construct(array $graph)
    {
        $this->graph = $graph;
    }

    public function shortestPath($start, $end)
    {
        $distances = [];
        $previous = [];
        $queue = [];

        foreach ($this->graph as $node => $edges) {
            $distances[$node] = INF;
            $previous[$node] = null;
            $queue[$node] = INF;
        }

        $distances[$start] = 0;
        $queue[$start] = 0;

        while (!empty($queue)) {
            $current = array_search(min($queue), $queue);
            unset($queue[$current]);

            if ($current == $end) {
                $path = [];
                while ($previous[$current]) {
                    array_unshift($path, $current);
                    $current = $previous[$current];
                }
                array_unshift($path, $start);
                return $path;
            }

            foreach ($this->graph[$current] as $neighbor => $weight) {
                $alt = $distances[$current] + $weight;
                if ($alt < $distances[$neighbor]) {
                    $distances[$neighbor] = $alt;
                    $previous[$neighbor] = $current;
                    $queue[$neighbor] = $alt;
                }
            }
        }

        return [];
    }
}
