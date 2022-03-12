<?php

if (isset($_POST['register']))
{
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $user   = new User($conn, $email, $password, $name);
    $result = $user->register();

    $conn->selectLast('users','id');
    $user_id = array_values(mysqli_fetch_assoc($conn->result))[0];

    $wallet = new Wallet($conn, $user_id);
    $wallet->createWallet();

    if ($result){
        $_SESSION['userName'] = $name;
        $_SESSION['userID']   = $user_id;
        $_SESSION['auth']     = true;
        header('REFRESH:2;URL=index.php');
    }
}