<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Simplex - Connect</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./style/style.css">
        <link rel="stylesheet" href="./style/sign.css">
        <link rel="stylesheet" href="./style/header.css">
    </head>
    <body>
        <?php
            include('./views/header.php');
        ?>
        <div class="form-containner">
            <form action="signInBack.php" method="post">
                <h1 class="title">Sign In</h1>
                <div class="content-containner">
                    <div class="input-containner">
                        <input type="text" name="username"  placeholder="Username">
                    </div>
                    <div class="input-containner">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                </div>
                <?php include('./modifier/index.php') ?>
                <div class="action">
                    <a href="signUp.php" class="btn">Register</a>
                    <button type="submit">Sign in</button>
                </div>
            </form>
        </div>
        
        <script src="./script/script.js" ></script>
    </body>
</html>