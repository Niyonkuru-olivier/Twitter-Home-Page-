<?php
$conn = mysqli_connect("localhost","root","","project");
if(!$conn){
    die ("connection error");
}else{

       
        $Email = $_POST["Email"];
        $password = $_POST["password"];
       
        
        $sql = "INSERT INTO signup (Email,Password)
         VALUES ('Email','Password')";
         $run_sql = mysqli_query($conn,$sql);
         if($run_sql){
            
            die ("inserting data is done well");
         }else{
            die ("inserting data not done please!");
         }
}
?>