<?php

if ( !(empty($_SESSION)) && !(empty($_SESSION['userID'])) )
{
    $wallet  = new Wallet($conn, $_SESSION['userID']);
    $balance = $wallet->getBalance();
}