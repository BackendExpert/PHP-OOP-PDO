<?php 
    include("headers/header.php"); 
    include("includes/class-autoload.inc.php");

    $users = new users();
    $user = $users->editUser($_GET['id']);
?>

<br><br>
<div class="container">
    <div class="card">
        <div class="card-header">
            User Update
        </div>
        <div class="card-body">
            <a href="index.php"><button class="btn btn-primary">Back</button></a><br><br>
            <form action="user.process.php?send=update" method="POST">
                <label for="fn">User First Name : </label>
                <input type="text" name="update-fn" id="" class="form-control" value="<?= $user['fname']?>"> <br>
                <label for="ln">User Last Name : </label>
                <input type="text" name="update-ln" id="" class="form-control" value="<?= $user['lname']?>"><br>

                <label for="address">User Address : </label>
                <textarea name="update-address" id="" cols="10" rows="10" class="form-control">
                    <?= $user['address_user']?>
                </textarea>
                <br>

                <input type="submit" value="Update User" class="btn btn-success" name="update_user">               

            </form>
        </div>
    </div>
</div>