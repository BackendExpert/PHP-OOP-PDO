<?php

    include("includes/class-autoload.inc.php");
    $users = new users();

    if(isset($_POST['add_user'])) {
        $fn = $_POST['user-fn'];
        $ln = $_POST['user-ln'];
        $address = $_POST['user-address'];

        $users->addUser($fn, $ln, $address);
    }

    elseif(isset($_POST['update_user'])) {
        $id = $_GET['id'];
        $update_fn = $_POST['update-fn'];
        $update_ln = $_POST['update-ln'];
        $update_address = $_POST['update-address'];

        $users->updateUser($update_fn, $update_ln, $update_address, $id);
    }