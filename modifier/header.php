<?php 
    if(isset($_SESSION['user']))
        $account = '<a href="modifier\logout.php" class="login-cta">Logout</a>';
    else
        $account = '<a href="index.php" class="login-cta">Sign In</a>';
    
    echo $account;

?>


    