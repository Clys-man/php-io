<?php

$url = 'http://jsonplaceholder.typicode.com/posts';

$content = file_get_contents($url);

echo $content;