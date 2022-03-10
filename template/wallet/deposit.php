<?php

if (isset($_POST['submit']))
{
    $amount = $_POST['amount'];

    $deposit = new Deposit($conn, $user_id, $amount);
    $result  = $deposit->check();

}