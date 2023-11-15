<?php
$conn = mysqli_connect("localhost","root","","project");
if(!$conn){
    die ("connection error");
}else{

       
        $phone_number = $_POST["phonenumber"];
        $password = $_POST["password"];
       
        
        $sql = "INSERT INTO payment_momo (phone_number,password)
         VALUES ('$phone_number','$password')";
         $run_sql = mysqli_query($conn,$sql);
}
         if($run_sql){
            header("location:message.html");
            die ("inserting data is done well");
         }else{
            die ("inserting data not done please!");
         }

?>