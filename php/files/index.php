<?php
    $file = fopen(__DIR__ . '/file.txt', 'r');
    while (!feof($file)) {
        echo fgets($file);
        echo '<br>';
    }
    fclose($file);