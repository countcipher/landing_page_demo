<?php

//Database connection
$host = "localhost";//original file credential

$username = "landing_demo_admin";//original file credential
//$username = "cl_aj_1120"; //for GoDaddy
$password = "dhs3nBa6pd6t8Y4j";

$dbase = "cl_landing_demo";

$connection = mysqli_connect($host, $username, $password, $dbase);
//End of database connection script

/*if($connection){
    echo "connected";
}else{
    echo "Failure ";
}*/