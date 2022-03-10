<?php

class Category {

    public $name_err;
    public $categories;

    public function __construct()
    {
        $this->categories = new Database();
    }

    public function createCategory($name)
    {
        if (empty($name))
        {
            $this->name_err = "Please enter a name.";
        }
    }

}