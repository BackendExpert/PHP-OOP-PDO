<?php 
    include("includes/class-autoload.inc.php");

    $sayhello = new db();
    echo $sayhello->sayHello;
?>