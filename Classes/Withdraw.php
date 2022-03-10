<?php

// include "DataBase.php";
include "Wallet.php";

class Withdraw {
    
    private $user_id;
    private $amount;
    private $conn;

    public $msg;

    public function __construct($user_id, $amount, $conn)
    {
        // $this->conn    = new Database();
        $this->conn = $conn;
        $this->user_id = $user_id;
        $this->amount  = $amount;
    }

    public function check()
    {
        $wallet  = new Wallet($this->user_id,$this->conn);
        $balance = $wallet->getBalance();

        if ($balance > $this->amount)
        {
            $result = $balance - $this->amount;
            
            $wallet->updateBalance($result);
            $this->addProcessWithdraw();

            $this->msg = ['success' => "Done"];
            return true;
        }
        else
        {
            $this->msg = ['danger' => "false"];
            return false;
        }

    }

    private function addProcessWithdraw()
    {
        $this->conn->insert('withdraw', ['user_id' => $this->user_id, 'amount' => $this->amount]);
    }
}

// $a = new Withdraw(16,200);
// $a->check();