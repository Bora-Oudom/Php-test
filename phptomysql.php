<pre><?php

$hostname = "localhost";
$username = "root";
$password = "Boraoudom28";
$database = "user";

//CONNECT TO MYSQL  
$con = mysqli_connect($hostname,$username , $password, $database);

if(!$con)
    die("Database Error");

//QUERY RESULT
$result = mysqli_query($con,"SELECT * FROM users Limit 3");
while($data = mysqli_fetch_assoc($result)){
    print_r($data);
}

//TO FREE SOME MEMORIES AND CLOSE DATABASE

mysqli_close($con);
    
?></pre>