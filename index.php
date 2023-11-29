<?php 
    include("includes/class-autoload.inc.php");
    include("headers/header.php");

    // $sayhello = new db();
    // echo $sayhello->sayHello;

    // $users = new users();
    // print_r($users->getUsers());

    
?>



<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Join Date</th>
                    <th>Last Update</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $users = new users(); ?>
                <?php if($users->getUsers()) : ?>

                <?php else : ?>
                    <p style="color:red;">Users Not Found..!</p>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>