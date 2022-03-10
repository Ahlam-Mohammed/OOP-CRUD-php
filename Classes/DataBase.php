<?php 

// namespace Classes\Database;
// use Classes\Connection\Connection;
include 'Connection.php';

class Database extends Connection{

    public $sql;
    public $result =array();
    

    public function select($table, $row = '*', $where = null)
    {
        if ($where != null)
        {
            $this->sql = "SELECT $row FROM $table WHERE $where";
        }
        else
        {
            $this->sql = "SELECT $row FROM $table";
        }

        $this->result = $this->conn->query($this->sql);
    }

    public function insert($table, $data = array())
    {
        $table_columns = implode(',', array_keys($data));
        $table_values  = implode("','", $data);

        $this->sql    = "INSERT INTO $table ($table_columns) VALUES ('$table_values')";
        $this->result = $this->conn->query($this->sql);
    }

    public function update($table, $data = array(), $id)
    {
        $param = array();

        foreach ($data as $key => $value)
        {
            $param [] = "$key = '$value'";
        }

        $this->sql  = "UPDATE $table SET ".implode(',',$param);
        $this->sql .= "WHERE $id";

        $this->result = $this->conn->query($this->sql);
    }

    public function delete($table, $id)
    {
        $this->sql = "DELETE FROM $table";
        $this->sql .=" WHERE $id";

        $this->result = $this->conn->query($this->sql);
    }

    public function selectLast($table, $row = '*')
    {
        $this->sql = "SELECT $row FROM $table ORDER BY id DESC LIMIT 1";
        $this->result = $this->conn->query($this->sql);
    }

    // close connectio
    public function __destruct(){
        $this->conn->close();
    }
}