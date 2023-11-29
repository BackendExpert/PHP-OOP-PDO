<?php

    include("includes/class-autoload.inc.php");
    $users = new users();

    if(isset($_POST['add_user'])) {
        $fn = $_POST['user-fn'];
        $ln = $_POST['user-ln'];
        $address = $_POST['user-address'];

        $users->addUser($fn, $ln, $address);
    }