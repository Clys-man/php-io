<?php

$path = __DIR__.'/write-file.txt';
$file = fopen($path, 'a');

$content = PHP_EOL . 'fwrite — Binary-safe file write';

fwrite($file, $content);

fclose($file);
