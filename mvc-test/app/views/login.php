<?php include "partials/header.php" ?>

<div class="container mt-5">

  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Login</h2>

    <?php if (!empty($errors)): ?>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">

        <?php foreach ($errors as $error): ?>
          <?= $error . "<br>" ?>
        <?php endforeach; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    <?php endif; ?>

    <div class="mb-2">
      <label for="">Email</label>
      <input type="text" name="email" value="<?= get_var('email') ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Password</label>
      <input type="password" name="password" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>

<?php include "partials/footer.php" ?>