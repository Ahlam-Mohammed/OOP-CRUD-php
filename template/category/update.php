<?php

include '../../Models/DataBase.php';

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $id   = $_POST['id'];

    $conn   = new Database();
    $result = $conn->update('categories', ['name' => $name], "id='$id'");

    header('Location: category.php');
    
}