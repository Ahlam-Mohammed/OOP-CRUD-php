<?php

// include "DataBase.php";
// include "Wallet.php";

class Withdraw {
    
    private $user_id;
    private $amount;
    private $conn;
    private $result;

    public $msg;

    public function __construct($user_id, $amount, $conn)
    {
        $this->conn    = $conn;
        $this->user_id = $user_id;
        $this->amount  = $amount;
    }

    public function confirmWithdraw()
    {
        if (isset($this->user_id))
        {
            $result = $this->check();
            if ($result) 
            {
                $_SESSION['cart'] = array();
                $this->msg = ['success' => "Payment completed successfully ..."];
            }
            else
            {
                $this->msg = ['danger' => "Oops !! Your balance is insufficient ..."];
            }
        }
        else
        {
            $this->msg = ['danger' => "You must be logged in before purchasing ..."];
        }
    }

    private function check()
    {
        $wallet  = new Wallet($this->conn, $this->user_id);
        $balance = $wallet->getBalance();

        if ($balance > $this->amount)
        {
            $this->result = $balance - $this->amount;
            
            $wallet->updateBalance($this->result);
            $this->addProcessWithdraw();
            return true;
        }
        else return false;
    }

    private function addProcessWithdraw()
    {
        $this->conn->insert('withdraw', ['user_id' => $this->user_id, 'amount' => $this->amount]);
    }
}