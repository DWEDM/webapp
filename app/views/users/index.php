<?php include "../app/views/include/header.php" ?>

<div class="container mt-5">
  <div class="d-flex justify-content-between align-items-center">
    <h2>List of Verified Accounts</h2>
    <a href="<?= ROOT ?>/users/create" class="btn-primary">Add New</a>
  </div>
  <table class="table table-striped mt-3">
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Role</th>
      <th></th>
    </tr>
    <?php foreach ($users as $row) { ?>
      <tr>
        <td>
          <?= $row->firstname ?>
        </td>
        <td>
          <?= $row->lastname ?>
        </td>
        <td>
          <?= $row->email ?>
        </td>
        <td>
          <?= $row->role ?>
        </td>
        <td>

          <a href="<?= ROOT ?>/users/edit/<?= $row->id ?>" class="btn-success btn-sm">Edit</a>

          <a href="<?= ROOT ?>/users/delete/<?= $row->id ?>" class="btn-danger btn-sm">Delete</a>
        </td>
      </tr>
    <?php } ?>
  </table>
</div>
