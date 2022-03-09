<?php 

class Database{

    public $conn;
    public $sql;
    public $result =array();
    
    function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', '', 'shop');
    }

    // Select Data From DB
    public function select($table, $row = '*', $where = null)
    {
        if ($where != null){
            $sql = "SELECT $row FROM $table WHERE $where";
        }
        else {
            $sql = "SELECT $row FROM $table";
        }
        $this->sql = $result = $this->conn->query($sql);
    }

    // Insert Data Into DB
    public function insert($table, $data = array())
    {
        $table_columns = implode(',', array_keys($data));
        $table_values  = implode("','", $data);

        $sql = "INSERT INTO $table ($table_columns) VALUES ('$table_values')";

        $result = $this->conn->query($sql);
    }

    // Update Data
    public function update($table, $data = array(), $id)
    {
        $param = array();

        foreach ($data as $key => $value)
        {
            $param[] = "$key = '$value'";
        }

        $sql = "UPDATE $table SET ". implode(',',$param);
        $sql .=" WHERE $id";

        $result = $this->conn->query($sql);
    }

    // Delete Data
    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table";
        $sql .=" WHERE $id";
        $sql;
        $result = $this->conn->query($sql);
    }

    // close connectio
    public function __destruct(){
        $this->conn->close();
    }
}








