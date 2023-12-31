<?php 
    include("includes/class-autoload.inc.php");
    include("headers/header.php");

    // $sayhello = new db();
    // echo $sayhello->sayHello;

    // $users = new users();
    // print_r($users->getUsers());

    
?>



<div class="container">
<br><br><br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add New User
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="user.process.php" method="POST">
            <label for="fname">First Name : </label>
            <input type="text" name="user-fn" id="" class="form-control"><br>
            <label for="fname">Last Name : </label>
            <input type="text" name="user-ln" id="" class="form-control"><br>
            <label for="fname">Address : </label>
            <textarea name="user-address" id="" cols="10" rows="10" style='resize:none;' class="form-control"></textarea>        
      </div>
      <div class="modal-footer">
            <input type="reset" value="Clear" class="btn btn-secondary">
            <input type="submit" value="Add User" class="btn btn-success" name="add_user">
        </form>
      </div>
    </div>
  </div>
</div>

<br><br><br>
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
                        <?php foreach($users->getUsers() as $users) : ?>
                            <tr>
                                <td><?= $users['id'] ?></td>
                                <td><?= $users['fname'] ?></td>
                                <td><?= $users['lname'] ?></td>
                                <td><?= $users['address_user'] ?></td>
                                <td><?= $users['join_at'] ?></td>
                                <td><?= $users['update_at'] ?></td>
                                <td>
                                    <a href="editUser.php?id=<?= $users['id'] ?>"><button class="btn btn-warning">Edit</button></a>
                                    <a href="user.process.php?id=<?= $users['id']?>&isDelete=true"><button class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    <?php else : ?>
                        <p style="color:red;">Users Not Found..!</p>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>