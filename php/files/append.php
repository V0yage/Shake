<?php
    $file = fopen('output.txt', 'a');
    fputs($file, 'line' . "\n");
    fclose($file);