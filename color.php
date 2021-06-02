
<body style = "background: 
    <?php
    //to define arraykey 
    if(isset($_REQUEST["color"])
    ){
        if($_REQUEST["color"]){
            echo$_REQUEST["color"];
        }else{
            echo"#ffffff";
        }
        
    }
    ?>">
    
    <form method = "get" >
        <h2>Color</h2><input  type="color" name ="color"><br><br>
        <button>Submit</button>
        
    </form>

</body>
