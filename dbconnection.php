<?php
$hostname = "localhost";
$username = "root";
$password = "Boraoudom28";
$database = "user";

//CONNECT TO MYSQL  
$con = mysqli_connect($hostname,$username , $password, $database);

if(!$con)
    die("Database Connection Error");
?>