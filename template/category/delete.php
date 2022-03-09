<?php 
    include '../../Models/DataBase.php';

    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        $conn = new database();
        $conn->delete('categories',"id='$id'");

        header('Location: category.php');
    }
    
?>