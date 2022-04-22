<?php

$path = __DIR__.'/../test.txt';
$file = file_get_contents($path);

echo $file;
