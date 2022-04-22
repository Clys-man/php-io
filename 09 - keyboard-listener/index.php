<?php

$keyboard = fopen('php://stdin', 'r');

$input = fgets($keyboard);

file_put_contents(__DIR__ . '/../test.txt', "\n$input", FILE_APPEND);