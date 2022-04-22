<?php

$input = fgets(STDIN);

file_put_contents(__DIR__ . '/../test.txt', "\n$input", FILE_APPEND);