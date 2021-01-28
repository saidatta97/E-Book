<?php
           

             $name=$_POST['name'];
             $email=$_POST['email'];
             $mobile=$_POST['mobile'];
             $password=$_POST['password'];
             $cpassword=$_POST['cpassword'];
 
            include("config.php"); 
                       
        if(strcmp($password,$cpassword)==0)
        {


            $query1="insert into user_reg (user_name,user_email,user_mobile,user_password) values(?,?,?,?)";
            $stmt1 = $mysqli->prepare($query1);
            $rc1=$stmt1->bind_param('ssis',$name,$email,$mobile,$password);
            $stmt1->execute();               
          
            echo"<script>alert('Registration done.');</script>";
            echo "<script>window.location.href='index.php';</script>";
         }
         else
         {
            echo"<script>alert('Password didnt match. Retry.');</script>";
            echo "<script>window.location.href='index.php';</script>";  
         }   
?>
