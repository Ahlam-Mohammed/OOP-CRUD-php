<?php

$cart = new Cart();
$cart->createCart();

/**
* Add product to cart.
*/
if (isset($_POST['addToCart']))
{
    $id       = $_POST['id'];
    $quantity = $_POST['quantity'];
    
    $cart->addToCart($id, $quantity);
}


/**
* Delete product from cart.
*/
if (isset($_POST['deleteItem']))
{
    $id = $_POST['id'];
    
    $cart->deleteItem($id);
}


/**
* Update product in cart.
*/
if (isset($_POST['updatQuantity']))
{
    $id       = $_POST['id'];
    $quantity = $_POST['quantity'];

    $cart->updatQuantity($id, $quantity);
}


/**
* Clear Cart.
*/
if (isset($_POST['emptyCard']))
{    
    $cart->emptyCard();
}