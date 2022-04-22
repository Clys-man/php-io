<?php

$context = stream_context_create([
    'zip' => [
        'password' => '12341234'
    ]
]);

echo file_get_contents(
    'zip://' .__DIR__. '/test.zip#test.txt', 
    false, 
    $context
);