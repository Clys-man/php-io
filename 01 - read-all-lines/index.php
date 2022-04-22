<?php

$path = __DIR__.'/../test.txt';
$file = fopen($path, 'r');

while (!feof($file)) {
    $string = fgets($file);

    echo $string;
}

fclose($file);