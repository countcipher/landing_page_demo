<?php
session_start();

if($_SESSION['active'] != 1){
    session_destroy;
    header("Location: admin_login.php");
    die();
}

include "db.php";



if(isset($_POST['delete'])){
    
    $id = $_POST['id'];
    $query_delete = "DELETE FROM people WHERE id = $id";
    
    mysqli_query($connection, $query_delete);
    
    header("Location: page_admin.php");
    
}