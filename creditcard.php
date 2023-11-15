<?php
$conn = mysqli_connect("localhost","root","","project");
if(!$conn){
    die ("connection error");
}else{

        $credit_card_number = $_POST["credit_card_number"];
        $phone_number = $_POST["phone_number"];
        $password = $_POST["password"];
       
        
        $sql = "INSERT INTO payment_credit_car (credit_card_number,phone_number,password)
         VALUES (credit_card_number,phone_number,password)";
         $run_sql = mysqli_query($conn,$sql);
         if($run_sql){
            header(location:message.html);
            die ("inserting data is done well");
         }else{
            die ("inserting data not done please!");
         }
}
?>