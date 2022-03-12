<?php

class User {

    private $id;
    private $name;
    private $email;
    private $password;

    public $id_err;
    public $name_err;
    public $email_err;
    public $password_err;

    public $msg = array();
    public $db;

    public function __construct($conn, $email, $password, $name = null)
    {
        $this->db       = $conn;
        $this->name     = $name;
        $this->email    = $email;
        $this->password = $password;
    }

    public function login()
    {
        if (empty($this->email)) $this->email_err = "Email must be entered";
        if (empty($this->password)) $this->password_err = "Password must be entered";

        if (empty($this->email_err) && empty($this->password_err))
        {
            $this->db->select('users','*',"email = '$this->email'");
            $result = $this->db->result;

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] == $this->email)
            {
                if ($row['password'] == $this->password)
                {
                    $this->msg  = ['success' => "Welcome, you are logged in successfully"];
                    $this->id   = $row['id'];
                    $this->name = $row['name'];
                    return true;
                } 
                else
                {
                    $this->password_err = "password is not correct";
                    return false;
                }
            }
            else
            {
                $this->email_err = "Email is not found";
                return false;
            }
        }
        else
        {
            $this->msg  = ['danger' => ".."];
        }
    }

    public function register()
    {
        $this->validate();

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
        $array = array();

        while($row = mysqli_fetch_assoc($this->db->result))
        {
            $array[] = $row['email'];
        }
        return $array;
    }

    private function validate()
    {
        // Validate name
        if (empty($this->name)) $this->name_err = "Name must be entered";

        // Validate email
        if (empty($this->email)) $this->email_err = "Email must be entered";
        elseif (in_array($this->email, $this->emails())) $this->email_err = "The email is already exist";

        // Validate password
        if (empty($this->password)) $this->password_err = "Password must be entered";
        elseif (strlen($this->password) < 8) $this->password_err = "password must be greater than 8 a character";
    }

    public function getName() { return $this->name; }

    public function getID() { return $this->id; }

    public function __destruct()
    {
        $this->email = $this->name = $this->password = $this->msg = '';
        $this->email_err = $this->name_err = $this->password = '';
    }
}
