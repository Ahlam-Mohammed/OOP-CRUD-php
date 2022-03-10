<?php

if (isset($_POST['submit']))
{
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $user   = new User($conn);
    $result = $user->login($email, $password);

    if ($result){
        header('REFRESH:2;URL=index.php');
    }
}