<?php

if (isset($_POST['submit']))
{
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $user   = new User($conn);
    $result = $user->register($name, $email, $password);

    $conn->selectLast('users','id');
    $user_id = array_values(mysqli_fetch_assoc($conn->result))[0];

    $wallet = new Wallet($conn, $user_id);
    $wallet->createWallet();

    if ($result){
        header('REFRESH:2;URL=index.php');
    }
}