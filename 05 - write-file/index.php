<?php

$path = __DIR__.'/write-file.txt';
$file = fopen($path, 'w');

$content = 'fwrite — Binary-safe file write';

fwrite($file, $content);

fclose($file);
