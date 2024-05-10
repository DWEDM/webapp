<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect</title>
</head>
<body>
    


<?php include('include/header.php')?>

    <div class="redirect-main-content">
            <div>
                <section class="hidden">
                <div class="redirect-msg">
                    <h1>You are about to leave this site...</h1>
                    <p>You'll be redirected to <strong>"philippineartawards.org"</strong>, Proceed?</p>
                </div>
                </section>
                <section class="hidden" style="transition-delay: 100ms">
                <a href="https://philippineartawards.org/art-news/" target="_blank">
                    <button class="redirect-button">
                        Redirect
                    </button>
                </a>
                </section>
            </div>
        <div class="paa-logo"></div>
    </div>

<?php include('include/footer.php')?>




</body>
</html>