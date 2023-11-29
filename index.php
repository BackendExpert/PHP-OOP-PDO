<?php 
    include("includes/class-autoload.inc.php");
    include("headers/header.php");

    // $sayhello = new db();
    // echo $sayhello->sayHello;

    // $users = new users();
    // print_r($users->getUsers());

    
?>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

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
                <tr>
                    <?php $users = new users(); ?>
                    <?php if($users->getUsers()) : ?>
                        <?php foreach($users->getUsers() as $users) : ?>
                            <td><?= $users['id'] ?></td>
                            <td><?= $users['fname'] ?></td>
                            <td><?= $users['lname'] ?></td>
                            <td><?= $users['address'] ?></td>
                            <td><?= $users['join_at'] ?></td>
                            <td><?= $users['update_at'] ?></td>
                            <td>Action</td>
                        <?php endforeach;?>
                    <?php else : ?>
                        <p style="color:red;">Users Not Found..!</p>
                    <?php endif; ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>