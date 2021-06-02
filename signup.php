<?php
$msg ="";
    require('dbconnection.php');
//To define arraykey 
 if(isset($_POST["fname"])&&
    isset($_POST["lname"])&&
    isset($_POST["username"])&&
    isset($_POST["password"])&&
    isset($_POST["repassword"])
//     array_key_exists("fname",$_POST)&&
//     array_key_exists("lname",$_POST)&&
//     array_key_exists("age",$_POST)&&
//     array_key_exists("password",$_POST)&&
//     array_key_exists("repassword",$_POST)
){
    if($_POST["fname"]==""||
        $_POST["lname"]==""||
        $_POST["username"]==""||
        $_POST["password"]==""||
        $_POST["repassword"]==""
        ){
            $msg ="Pleace fill all the requirement";
    } 
    else if($_POST["password"] !== $_POST["repassword"]){
        $msg ="The Password is not match";
     }
    else{
        //To encrypt password
        $encrypt = password_hash($_POST["password"], PASSWORD_DEFAULT);

        //insert data to database
    
        $query = "INSERT INTO users (fname, lname, username, password)
            VALUES ('{$_POST["fname"]}', '{$_POST["lname"]}', '{$_POST["username"]}', '$encrypt')";
        $result = mysqli_query($con, $query);
        
         //"{$_POST ["fname"]} {$_POST ["lname"]} is {$_POST ["age"]} ";
     }
}
?>
<body>
    <pre><?php
    echo $msg;
    ?></pre>
    
    <form method = "post" >
        <h2>Firstname</h2><input  type="text" name ="fname">
        <h2>Lastname</h2><input  type="text" name ="lname">
        <h2>Username</h2><input  type="text" name ="username">
        <h2>Password</h2><input  type="password" name ="password">
        <h2>Repassword</h2><input  type="password" name ="repassword">

        <button>Submit</button>
        
    </form>

</body>
