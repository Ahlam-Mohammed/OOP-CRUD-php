<?php


class Product {

    private $id;
    private $name;
    private $price;
    private $details;
    private $img;
    private $category_id;

    public $DB;

    public function __construct($conn)
    {
        $this->DB = $conn;
    }

    public function getAll()
    {
        $this->DB->select('products');
        return $this->DB->result;
    }

    public function getProductByID($id)
    {
        $this->DB->select('products','*',$id);
        return $this->DB->result;
    }
    
    public function __destruct(){
        $this->DB = '';
    }
}