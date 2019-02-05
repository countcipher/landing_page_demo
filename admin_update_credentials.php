<?php

session_start();
include "db.php";

if(!$_SESSION['active']){
    session_destroy();
    header("Location: page_admin.php");
    die();
}

if(isset($_POST['submit']) && $_POST['username']!="" && $_POST['password']!=""){
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    
    $query_insert = "UPDATE credentials SET username = '$username', password = '$password' WHERE id = 1";
    
    mysqli_query($connection, $query_insert);
    
    session_destroy();
    header("Location: admin_login.php");
    die();
}else{
    $error = "Enter both username and password";
    header("Location: page_admin.php?error=".urlencode($error));
    die();
}