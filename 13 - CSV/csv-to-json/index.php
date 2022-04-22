<?php

$url = 'https://gist.githubusercontent.com/tiangechen/b68782efa49a16edaf07dc2cdaa855ea/raw/0c794a9717f18b094eabab2cd6a6b9a226903577/movies.csv';

if (($handle = fopen($url, "r")) !== false) {
    $json = [];
    $key = fgetcsv($handle, 1000, ",");
    
    while ($row = fgetcsv($handle, 1000, ",")) {
        $json[] = array_combine($key, $row);
    }

    file_put_contents(__DIR__. '/../movies.json', json_encode($json));

    fclose($handle);
}
