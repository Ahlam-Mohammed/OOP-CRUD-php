<?php

include 'Classes/DataBase.php';
$conn = new Database();

include 'Classes/User.php';
include 'Classes/Wallet.php';
include 'Classes/Deposit.php';
include 'Classes/Product.php';
include 'Classes/Withdraw.php';
include 'Classes/Cart.php';


include 'template/product/getAll.php';

include 'template/user/logout.php';

include 'template/cart/getBalance.php';
include 'template/cart/cartOpreation.php';
include 'template/cart/confirmOrder.php';