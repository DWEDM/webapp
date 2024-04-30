<?php include "../app/views/partials/header.php" ?>

<div class="container mt-5">

  <div class="d-flex justify-content-between align-items-center">
    <h2>List of Task</h2>
    <a href="<?= ROOT ?>/tasks/create" class="btn btn-primary">Add New</a>
  </div>

  <table class="table table-striped mt-3">
    <tr>
      <th>Task Name</th>
      <th>Description</th>
      <th>Status</th>
      <th>Due Date</th>
      <th></th>
    </tr>
    <?php foreach ($tasks as $row) { ?>
      <tr>
        <td>
          <?= $row->task_name ?>
        </td>
        <td>
          <?= $row->task_description ?>
        </td>
        <td>
          <?= $row->task_status ?>
        </td><td>
          <?= $row->task_due ?>
        </td>
        <td>
          <a href="<?= ROOT ?>/tasks/edit/<?= $row->id ?>" class="btn btn-success btn-sm">Edit</a>
          <a href="<?= ROOT ?>/tasks/delete/<?= $row->id ?>" class="btn btn-danger btn-sm">Delete</a>
        </td>
      </tr>
    <?php } ?>
  </table>
</div>


<?php include "../app/views/partials/footer.php" ?>