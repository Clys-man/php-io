<?php

$url = 'https://gist.githubusercontent.com/tiangechen/b68782efa49a16edaf07dc2cdaa855ea/raw/0c794a9717f18b094eabab2cd6a6b9a226903577/movies.csv';

if (($handle = fopen($url, "r")) !== false) {
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        $row = "";

        foreach ($data as $column) {
            $row .= $column . " ";
        }

        file_put_contents(__DIR__ . '/../movies.txt', $row . PHP_EOL, FILE_APPEND);
    }
    fclose($handle);
}
