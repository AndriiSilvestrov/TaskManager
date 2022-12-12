<?php

function debug($data, $stop = false) {
    if (!DEBUG) return;

    echo '<br>Debug Section ========================================================<br>';
    if (is_array($data) && !empty($data)) {
        echo '<pre>' . print_r($data, 1) . '</pre>';
    } else {
        echo '<br>';
        var_dump($data);
        echo '<br><br>';
    }
    echo '===================================================================<br>' . PHP_EOL;

    if ($stop) end;
}