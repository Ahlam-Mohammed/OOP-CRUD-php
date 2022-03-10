<?php

// include 'DataBase.php';

class Wallet {

    private $conn;
    private $user_id;
    private $balance;

    public function __construct($conn, $user_id)
    {
        $this->conn = $conn;
        $this->user_id = $user_id;
    }

    public function createWallet()
    {
        $this->conn->insert('wallets',['user_id' => $this->user_id, 'balance' => 0]);
    }

    public function getBalance()
    {
        $this->conn->select('wallets', 'balance', "user_id='$this->user_id'");
        $this->balance = array_values( mysqli_fetch_assoc($this->conn->result))[0];
        return $this->balance;
    }

    public function updateBalance($result)
    {
        $this->conn->update('wallets', ['balance' => $result], "user_id='$this->user_id'");
    }

}