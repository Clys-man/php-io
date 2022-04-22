<?php

$content = file_get_contents(__DIR__ . '/../movies.json');
$movies = json_decode($content, true);

$csv = fopen(__DIR__ . '/../movies.csv', 'w');

foreach ($movies as $movie) {
    fputcsv($csv, $movie);
}

fclose($csv);