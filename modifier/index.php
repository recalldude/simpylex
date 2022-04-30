<?php
    if (isset($_GET['login_err']))
    {
        $err = htmlspecialchars($_GET['login_err']);

        switch($err)
        {
            case 'password':
                ?>
                    <div class="alert">
                    <p><strong>Error</strong> wrong password</p> 
                    </div>
                <?php
            break;

            case 'already':
                ?>
                    <div class="alert">
                    <p><strong>Error</strong> unknown user</p> 
                    </div>
                <?php
            break;

            case 'success':
                ?>
                    <div class="alert success">
                    <p>Account created</p> 
                    </div>
                <?php
            break;
        }
    }
?>