<?php

if (isset($_POST['submit']))
{
    $amount = $_POST['amount'];

    $deposit = new Deposit($conn, $_SESSION['userID'], $amount);
    $result  = $deposit->addBalance();
    
    header('REFRESH:2;URL=wallet.php');
}