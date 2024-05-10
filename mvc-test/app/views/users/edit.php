<?php include "../app/views/partials/header.php" ?>

<div class="container mt-5">
  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Edit user</h2>

    <div class="mb-2">
      <label for="">Role</label>
      <select name="role" class="form-control">
        <option value="">Choose a Role</option>
        <option <?= $row->role == 'Admin' ? 'selected' : '' ?> value="Admin">Admin</option>
        <option <?= $row->role == 'User' ? 'selected' : '' ?> value="User">User</option>
      </select>
    </div>
    <div class="mb-2">
      <label for="">First Name</label>
      <input type="text" name="firstname" value="<?= $row->firstname ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input type="text" name="lastname" value="<?= $row->lastname ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Email</label>
      <input type="email" name="email" value="<?= $row->email ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Password</label>
      <input type="password" name="password" value="<?= $row->password ?>" class="form-control">
    </div>

    <button class="btn btn-primary" type="submit">Update</button>
  </form>
</div>

<?php include "../app/views/partials/footer.php" ?>