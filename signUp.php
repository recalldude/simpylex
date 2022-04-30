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
            <form action="signUpBack.php" method="post">
                <h1 class="title">Sign Up</h1>
                <div class="content-containner">
                    <div class="input-containner">
                        <input type="text" name="username"  placeholder="Username" required="required">
                    </div>
                    <div class="input-containner">
                        <input type="text" name="email"  placeholder="Email" required="required">
                    </div>
                    <div class="input-containner">
                        <input type="password" name="password" placeholder="Password" required="required">
                    </div>
                    <div class="input-containner">
                        <input type="password" name="password_confirm" placeholder="Confirm password" required="required">
                    </div>
                </div>
                <?php include('./modifier/signUp.php') ?>
                <div class="action">
                    <a href="index.php" class="btn">Sign In</a>
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
        
        <script src="./script/script.js" ></script>
    </body>
</html>