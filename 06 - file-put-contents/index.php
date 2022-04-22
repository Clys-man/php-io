<?php

$path = __DIR__.'/write-file.txt';
$content = 'fwrite — Binary-safe file write';

$content = file_put_contents($path, $content);

echo $content;