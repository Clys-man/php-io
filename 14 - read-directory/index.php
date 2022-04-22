<?php

$directory = dir(__DIR__ . '/..');

while ($file = $directory->read()) {
    echo $file . PHP_EOL;
}