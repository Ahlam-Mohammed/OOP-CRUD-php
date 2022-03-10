<?php 

// namespace Classes\Connection;

class Connection {
    
    final public const HOSTNAME = 'localhost';
    final public const USERNAME = 'root';
    final public const PASSWORD = '';
    final public const DATABASE = 'shop';

    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect(self::HOSTNAME, self::USERNAME, self::PASSWORD, self::DATABASE);
    }

    // close connectio
    public function __destruct(){
        $this->conn->close();
    }
}