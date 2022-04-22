<?php

$stream = fopen(
    'zip://' . __DIR__ . '/../7 - read-other-protocols/zip/files.zip#test.txt', 
    'r'
);

stream_copy_to_stream($stream, STDOUT);
