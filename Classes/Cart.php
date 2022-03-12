<?php

class Cart {

    public $msg;

    public function createCart()
    {
        if (!(isset($_SESSION['cart']) )) $_SESSION['cart'] = array(); 
    }

    public function addToCart($id, $quantity)
    {
        if ($quantity > 0)
        {
            if (isset($_SESSION['cart'][$id]))
            {
                $_SESSION['cart'][$id] += $quantity;
            }
            else{
                $_SESSION['cart'][$id] = $quantity;
            }
            $this->msg  = ['success' => "The product has been added to the cart ..."];
            return true;
        }
        elseif ($quantity == 0)
        {
            $this->msg  = ['danger' => "Oops, You forgot to enter a value ..."];
            return false;
        }
        else {
            $this->msg  = ['danger' => "You must enter a valid value ..."];
            return false;
        }
    }

    public function updatQuantity($id, $quantity)
    {
        if ($quantity > 0) 
        { 
            $_SESSION['cart'][$id] = $quantity; 
            $this->msg  = ['success' => "Quantity has been Updated ..."];
            return true;
        }
    
        elseif ($quantity == 0) 
        { 
            unset($_SESSION['cart'][$id]); 
            $this->msg  = ['success' => "Quantity has been Updated ..."];
            return true;
        }

        elseif ($quantity < 0) 
        {
            $this->msg  = ['danger' => "You must enter a valid value ..."];
            return false;
        }
    }

    public function deleteItem($id)
    {
        unset($_SESSION['cart'][$id]);
        $this->msg  = ['success' => "The product has been Deleted ..."];
        return true;
    }

    public function emptyCard()
    {
        $_SESSION['cart'] = array();
        $this->msg  = ['success' => "You Emptied Cart ..."];
        return true;
    }

}