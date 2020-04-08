<?php
    $file = fopen(__DIR__ . '/output.txt', 'w');
    for ($i = 0; $i < 30; $i++) {
        fputs($file, $i . "\n");
    }
    fclose($file);