<?php include "../app/views/partials/header.php" ?>

<div class="container mt-5">
  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Delete user</h2>
    <div class="mb-2">
      <label for="">First Name</label>
      <input type="text" name="firstname" disabled value="<?= $row->firstname ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input type="text" name="lastname" disabled value="<?= $row->lastname ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Email</label>
      <input type="email" name="email" disabled value="<?= $row->email ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Password</label>
      <input type="password" name="password" disabled value="<?= $row->password ?>" class="form-control">
    </div>

    <input type="hidden" name="id" value="<?= $row->id ?>">
    <button class="btn btn-danger" type="submit">Delete</button>
  </form>
</div>

<?php include "../app/views/partials/footer.php" ?>