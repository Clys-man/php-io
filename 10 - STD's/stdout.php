<?php

$stdout = fopen('php://stdout', 'w');

fwrite($stdout, "Hello ");
fwrite(STDOUT, "World!");
