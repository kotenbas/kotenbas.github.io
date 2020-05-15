<?php
    $fp = fopen('counter.txt', 'w');
    $test = fwrite($fp, "bfdbgfcgcgcg");
    $fp = fopen('counter.txt', 'r');
?>