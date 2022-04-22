<?php

$file = new SplFileObject(__DIR__ . '/../test.txt');

while (!$file->eof()) {
    echo $file->fgets();
}