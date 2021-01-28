<?php
session_start();
if(!isset($_SESSION['user']))
{
header("location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <style type="text/css">
      
      .margin{
        margin-left: 250px;
      }
    </style>

    
</head>

<body>

    
    <header>
        <?php
            include("header.php");
        ?>
    </header>
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="index.html">Home</a>
            <span class="breadcrumb-item active">Change Password &nbsp; &nbsp;</span>
              <hr/>
              <br>
                <?php
                   include("config.php");
                   $user_id=$_SESSION['id'];
                   $query1="select * from user_reg where user_id=$user_id ";
                   $res1=mysqli_query($mysqli,$query1);
                   $row1=mysqli_fetch_row($res1);
              
                ?>


                 <form role="form" method="post" enctype="multipart/form-data">
                      <div class='row'>
                      <div class='col-lg-9 col-sm-offset-1'>
                        <div class='panel'>
                        <div class='panel-heading'>
                           <center><LEGEND>Change Password</LEGEND></center>
                           <br>
                        </div>
          <div class='panel-body margin '>
        
            
            <div class='row'>
              <div class='col-lg-4 col-lg-offset-1'>
              <label>New Password</label> 
              </div>
              <div class='col-lg-5 col-lg-offset-0'>
              <input type='Password' name='npass' id='npass' value='' placeholder="NEW Password"  class='form-control' >
              </div>  
            </div>
            
            <br><div class='row'>
          <div class='col-lg-4 col-lg-offset-1'>
          <label>Confirm Password </label>  
          </div>
          <div class='col-lg-5'>
          <input type='Password' id='cpass' name='cpass' value='' placeholder="Confirm Password" class='form-control'><br>
          </div>
        </div>  

        
      

      <div class="row">
        <div class="col-lg-5 col-lg-offset-6">
            <button type="submit" name="change" class="btn btn-lg btn-success btn-block">Update Password</button>
        </div>
      </div>

      

        </div>
        </div>
      </div>
      </form>
 

                                                    

        </div>

    </div>
    <section class="static about-sec">
        <div class="container">
            <!-- <h2>Profile</h2> -->
            <div class="recomended-sec">
                <div class="row">
                      <?php
           
                      ?>    
                </div>
            </div>
                    </div>
    </section>
    <?php
        include("footer.php");
    ?>
      <?php
      include("config.php");
      $user_id=$_SESSION['id'];
         if(isset($_POST['change']))  
        {
          $npass=$_POST['npass'];
          $cpass=$_POST['cpass'];
          if(strcmp($npass,$cpass)==0)
        {

          $con="update user_reg set user_password=? where user_id=?";
            $chngpwd1 = $mysqli->prepare($con);
            $chngpwd1->bind_param('si',$npass,$user_id);
              $chngpwd1->execute();
            echo "<script>
            var r=confirm('Password changed Successfully');
            if(r == true)
            {
              window.location.href='viewprofile.php';
            }
            </script>";
        } 

        else
        {

          echo "<script>
            var r=confirm('NEW Password and confirm password didnt match');
            if(r == true)
            {
              window.location.href='changepass.php';
            }
            </script>";

        } 

          // $query2="update user_reg set user_name='$name' where user_id=$user_id ";
          // $res2=mysqli_query($mysqli,$query2);

            //echo"<script>alert('Profile Details updated ');</script>"; 

            //echo "<script>window.location.href='viewprofile.php';</script>";
        }
    ?>