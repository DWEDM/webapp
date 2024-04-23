<?php include "../app/views/partials/header.php" ?>

<div class="container mt-5">
  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Task List</h2>
    <div class="mb-2">
      <label for="">Task Name</label>
      <input type="text" name="task_name" value="<?= $row->task_name ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Description</label>
      <input type="text" name="task_description" value="<?= $row->task_description ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Status</label>
      <input type="text" name="task_status" value="<?= $row->task_status ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Due Date</label>
      <input type="text" name="task_due" value="<?= $row->task_due ?>" class="form-control">
    </div>

    <button class="btn btn-primary" type="submit">Update</button>
  </form>
</div>

<?php include "../app/views/partials/footer.php" ?>