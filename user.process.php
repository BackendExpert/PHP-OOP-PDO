<?php

    include("includes/class-autoload.inc.php");
    $users = new users();

    if(isset($_POST['add_user'])) {
        print_r($_POST);
    }