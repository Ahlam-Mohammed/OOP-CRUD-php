<?php

if (isset($_POST['login']))
{
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $userLogin = new User($conn ,$email, $password);
    $result    = $userLogin->login();

    if ($result)
    {
        $_SESSION['userName'] = $userLogin->getName();
        $_SESSION['userID']   = $userLogin->getID();
        $_SESSION['auth']     = true;

        header('REFRESH:2;URL=index.php');
    }
}