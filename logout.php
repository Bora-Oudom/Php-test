<?php

//USE SESSION INDEATD OF COOKIE
// session_start();
// if(!isset($_SESSION["username"])){
    //TO SET TIMEOUT FOR SESSION TO DELETE COOKIE 
        unset($_SESSION["username"]);
    header("Location: /login.php");
    exit();
//}

//TO CHECK IF COOKIE IS EXIST
    // if(!isset($_COOKIE["username"])){
        // setcookie("username", "", time()-1);
        // header("Location: /login.php");
        // exit();
//}
?>
