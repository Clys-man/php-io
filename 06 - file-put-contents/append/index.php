<?php

$path = __DIR__.'/write-file.txt';
$content = PHP_EOL . 'fwrite — Binary-safe file write';

$content = file_put_contents($path, $content, FILE_APPEND);

echo $content;