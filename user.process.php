<?php

    include("includes/class-autoload.inc.php");
    $users = new users();

    if(isset($_POST['add_user'])) {
        $fn = $_POST['fn'];
        $ln = $_POST['ln'];
        $address = $_POST['address'];

        $users->addUser();
    }