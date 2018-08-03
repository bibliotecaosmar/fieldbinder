<?php
    //Checkout if user sent form//
    if(isset($session = null )){
        if(isset($_POST('login'))){
            $user = 'user';
            $password = 'password';
        }else{
            <a link="signin.php"/> or <a link="signup.php"/>
        }
    }else{
        <h1
    }
    //session

    //logout
    if(isset('logout')) $session = NULL;