<?php

$path = __DIR__.'/../test.txt';
$file = fopen($path, 'r');

$fileSize = filesize($path);
$content = fread($file, $fileSize);

echo $content;

fclose($file);