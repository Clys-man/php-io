<?php

$path = __DIR__.'/../test.txt';
$file = fopen($path, 'r');

stream_filter_append($file, 'string.toupper');

$content = fread($file, filesize($path));

echo $content;