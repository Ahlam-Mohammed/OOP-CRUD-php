<?php

// namespace Classes\User;
// use Classes\Database\Database;
// include "DataBase.php";
// include "Wallet.php";

class User {

    private $name;
    private $email;
    private $password;

    public $id_err;
    public $name_err;
    public $email_err;
    public $password_err;
    public $msg = array();

    public $db;
    // public $wallet;

    public function __construct($conn)
    {
        $this->db     = $conn;
        // $this->wallet = new Wallet();
    }

    public function __get($name)
    {
        echo "The property | $name | is not found or not accessible";
    }

    public function __set($name, $value)
    {
        echo "The property | $name | is not found or not accessible";
        echo "And you cannot assign this value | $value | to it";
    }

    public function login($email, $passwor)
    {
        $this->db->select('users','*',"email = '$email'");
        $result = $this->db->result;

        if ($result)
        {
            $row = mysqli_fetch_assoc($result);
            if ($row['password'] == $passwor)
            {
                $this->msg = ['success' => "Welcome, you are logged in successfully"];
                return true;
            } 
            else
            {
                $this->msg = ['danger' => "Sorry cannot logged, enter correct information"];
                return false;
            }
        }
    }

    public function register($name, $email, $passwor)
    {
        $this->validate($name, $email, $passwor);

        if (empty($this->name_err) && empty($this->email_err) && empty($this->password_err))
        {
            $this->db->insert('users', ['name' => $this->name, 'email' => $this->email, 'password' => $this->password]);
            $this->msg = ['success' => "Hello dear, your account has been created successfully"];
            return true;
        }

        else {
            $this->msg = ['danger' => "Sorry cannot inserted, enter correct information"];
            return false;
        }
    }

    private function emails()
    {
        $this->db->select('users','email');
        return array_values(mysqli_fetch_assoc($this->db->result)); 
    }

    private function validate($name, $email, $passwor)
    {
        // Validate name
        if (empty($name)) $this->name_err = "Name must be entered";
        else $this->name = $name;

        // Validate email
        if (empty($email)) $this->email_err = "Email must be entered";
        elseif (in_array($email, $this->emails())) $this->email_err = "The email is already exist";
        else $this->email = $email;

        // Validate password
        if (empty($passwor)) $this->password_err = "Password must be entered";
        elseif (strlen($passwor) < 8) $this->password_err = "password must be greater than 8 a character";
        else $this->password = $passwor;
    }
}