<?php

$path = 'zip://'. __DIR__.'/files.zip#test.txt';

$content = file_get_contents($path);

echo $content;