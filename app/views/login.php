<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>


<?php include('include/header.php')?>

    <div class="art-cover">
        <div class="login-main-content" style="margin-top: 10%;">

            <div class="form-container">

                <h2 class="title" style="margin-top: 5%;">Log In</h2>

                    <form class="form" method="POST">

                    <?php if (!empty($errors)): ?>

                        <div class="alert alert-warning alert-dismissible fade show" role="alert">

                        <?php foreach ($errors as $error): ?>
                            <?= $error . "<br>" ?>
                        <?php endforeach; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    <?php endif; ?>

                        <input type="text" name="email" value="<?= get_var('email') ?>" class="input" placeholder="Email">
                        <input type="password" name="password" class="input" placeholder="Password">
                        <button class="form-btn" type="submit">Log in</button>
                    </form>
                    <p class="sign-up-label">
                        Don't have an account? <a href="<?= ROOT ?>/signup"><span class="sign-up-link">Sign up</span></a>
                    </p>
            </div>

        </div>
    </div>

    



    <div class="container">
    <footer class="py-3 my-4">
        <p class="text-center text-muted" style="color: white;">© 2024 Museo Galeria</p>
    </footer>
    </div>

</body>
</html>