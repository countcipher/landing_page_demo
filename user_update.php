<?php

include "db.php";

if(isset($_POST['submit']) && $_POST['name']!="" && $_POST['phone']!=""){
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    //$name = $_POST['name'];
    
   //For time
    date_default_timezone_set('America/New_York');
    $date = date("m/d/Y");
    //$date = date("m/d/Y", time());
    //$date = date("m/d/Y h:i a");
    //$date = date('h:i:s a', time());
    
    /*echo $email."<br>";
    echo $name."<br>";
    echo $date;*/
    
    $query_insert = "INSERT INTO people (phone, name, date) VALUES ('$phone', '$name', '$date')";
    
    mysqli_query($connection, $query_insert);
    
    header("Location: thanks.php");
}else{
    $error = "Please enter both your name and email address";
    header("Location: index.php?error=".urlencode($error));
    die();
}
