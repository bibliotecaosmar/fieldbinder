<?php include 'logged.php' ?>
<?php
    //Checkout if user sent form//
    if(isset($session != ''))
        if(isset($_POST('login'))){
            $user = 'user';
            $password = 'password';
        }
