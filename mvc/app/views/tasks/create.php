<?php include "../app/views/partials/header.php" ?>

<div class="container mt-5">
  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Create Task</h2>
    <div class="mb-2">
      <label for="">Task Name</label>
      <input type="text" name="task_name" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Description</label>
      <input type="text" name="task_description" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Status</label>
      <input type="text" name="task_status" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Due Date</label>
      <input type="text" name="task_due" class="form-control">
    </div>

    <button class="btn btn-primary" type="submit">Create</button>
  </form>
</div>

<?php include "../app/views/partials/footer.php" ?>