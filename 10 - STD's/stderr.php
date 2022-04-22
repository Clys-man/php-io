<?php

$stderr = fopen('php://stderr', 'w');

fwrite($stderr, "Display ");
fwrite(STDERR, "Error!");
