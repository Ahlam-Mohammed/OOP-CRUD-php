<?php

// include "Wallet.php";

class Deposit {

    private $DB;
    private $user_id;
    private $amount;
    
    public $amount_err;
    public $msg;

    public function __construct($conn, $user_id, $amount)
    {
        $this->DB      = $conn;
        $this->amount  = $amount;
        $this->user_id = $user_id;
    }

    public function addBalance()
    {
        $this->validate();

        $wallet  = new Wallet($this->DB, $this->user_id);
        $balance = $wallet->getBalance();

        if (empty($this->amount_err))
        {
            $result = $balance + $this->amount;
            
            $wallet->updateBalance($result);
            $this->addProcessDeposit();

            $this->msg = ['success' => "A balance has been added to your wallet ..."];
            return true;
        }
    }

    private function addProcessDeposit()
    {
        $this->DB->insert('deposits', ['user_id' => $this->user_id, 'amount' => $this->amount]);
    }

    private function validate()
    {
        // Validate amount
        if (empty($this->amount)) $this->amount_err = "Please Enter Amount";
        else if ($this->amount <= 5) $this->amount_err = "Amoun must be greater than $5";
        else $this->amount = $this->amount;
    }
}