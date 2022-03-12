<?php

if (isset($_POST['confirm']))
{
    $user_id = $_SESSION['userID'];
    $total   = $_POST['total'];

    $withdraw = new Withdraw($user_id, $total, $conn);
    $withdraw->confirmWithdraw();
}