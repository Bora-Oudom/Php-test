<?php
    require ('dbconnection.php');
?>
<body>
    <pre><?php
//TO CHECK ARRAY KEYS
    if(isset($_POST["username"])&&
        isset($_POST["password"])
    ){
        //to prevent from wrong name syntax
        $name = mysqli_real_escape_string($con,$_POST["username"]);
        $query = "SELECT * FROM users
            WHERE username = '{$name}'";
        $result = mysqli_query($con, $query);
        $data = mysqli_fetch_assoc($result);

        //username is correct
        if($data){
            //check is the passowrd is correct 
            if(password_verify($_POST["password"], $data['password'])){
                //TO CREATE SESSION 
            $_SESSION["username"] = "oudom";
            
            //TO CREATE COOKIES
            //  setcookie("username", "oudom", time() + 7*24*60*60, "/");
             
            //TO GO TO THE HOME PAGE 
             header("Location: /");
            exit();
            }else{
                echo"pleace enter corect Username and Password";
            }
        //username is incorrect 
        }else{
        echo"pleace enter corect Username and Password";
        }
        
    }
    ?></pre>
    
    <form method = "post" >
        <h2>Username</h2><input  type="text" name ="username">
        <h2>Password</h2><input  type="password" name ="password"><br><br>
        <button>Submit</button>
        
    </form>

</body>
