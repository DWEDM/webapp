<?php include "../app/views/partials/header.php" ?>

<div class="container mt-5">
  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Delete user</h2>
    <div class="mb-2">
      <label for="">Task Name</label>
      <input type="text" name="task_name" disabled value="<?= $row->task_name ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Description</label>
      <input type="text" name="task_description" disabled value="<?= $row->task_description ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Satus</label>
      <input type="email" name="task_status" disabled value="<?= $row->task_status ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Due Date</label>
      <input type="text" name="task_due" disabled value="<?= $row->task_due ?>" class="form-control">
    </div>

    <input type="hidden" name="id" value="<?= $row->id ?>">
    <button class="btn btn-danger" type="submit">Delete</button>
  </form>
</div>

<?php include "../app/views/partials/footer.php" ?>