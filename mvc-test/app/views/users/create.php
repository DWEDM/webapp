<?php include "../app/views/partials/header.php" ?>

<div class="container mt-5">
  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Create user</h2>

    <?php if (!empty($errors)): ?>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">

        <?php foreach ($errors as $error): ?>
          <?= $error . "<br>" ?>
        <?php endforeach; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    <?php endif; ?>

    <div class="mb-2">
      <label for="">Role</label>
      <select name="role" class="form-control">
        <option value="">Choose a Role</option>
        <option <?= get_select('role', 'Admin') ?> value="Admin">Admin</option>
        <option <?= get_select('role', 'User') ?> value="User">User</option>
      </select>
    </div>
    <div class="mb-2">
      <label for="">First Name</label>
      <input type="text" name="firstname" value="<?= get_var('firstname') ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input type="text" name="lastname" value="<?= get_var('lastname') ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Email</label>
      <input type="text" name="email" value="<?= get_var('email') ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Password</label>
      <input type="password" name="password" value="<?= get_var('password') ?>" class="form-control">
    </div>

    <button class="btn btn-primary" type="submit">Create</button>
  </form>
</div>

<?php include "../app/views/partials/footer.php" ?>