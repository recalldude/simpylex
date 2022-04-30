<?php 
    require_once 'config.php';

    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm']))
    {
        $pseudo = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_confirm = htmlspecialchars($_POST['password_confirm']);

        $check = $bdd->prepare('SELECT pseudo, email, password FROM users WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0)
        {
            if(strlen($pseudo) <= 100)
            {
                if(strlen($email) <= 100)
                {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        if($password == $password_confirm)
                        {
                            $password = hash('sha256', $password);

                            $insert = $bdd->prepare('INSERT INTO users(pseudo, email, password) VALUES(:pseudo, :email, :password)');
                            $insert->execute(array(
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'password' => $password
                            ));
                            header('Location:index.php?login_err=success');
                        }else header('Location: signUp.php?reg_err=password');
                    }else header('Location: signUp.php?reg_err=email');
                }else header('Location: singUp.php?reg_err=email_length');
            }else header('Location: signUp.php?reg_err=pseudo_length');
        }else header('Location: signUp.php?reg_err=already');
    }