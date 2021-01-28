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
    <title>View Profile</title>
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
            <a class="breadcrumb-item" href="index.php">Home</a>
            <span class="breadcrumb-item active">Profile &nbsp; &nbsp;</span>
              <hr/>
              <br>
                <?php
                   include("config.php");
                   $user_id=$_SESSION['id'];
                   $query1="select * from user_reg where user_id=$user_id ";
                   $res1=mysqli_query($mysqli,$query1);
                   $row1=mysqli_fetch_row($res1);
              
                ?>


                 <form method='get' action="editprofile.php">
                      <div class='row'>
                      <div class='col-lg-9 col-sm-offset-1'>
                        <div class='panel'>
                        <div class='panel-heading'>
                           <center><LEGEND>View profile</LEGEND></center>
                           <br>
                        </div>
          <div class='panel-body margin '>
        
            
            <div class='row'>
              <div class='col-lg-3 col-lg-offset-1'>
              <label>NAME</label> 
              </div>
              <div class='col-lg-5 col-lg-offset-0'>
              <input type='text' name='' value='<?php echo $row[1] ?>'  class='form-control'  disabled=''>
              </div>  
            </div>
            
            <br><div class='row'>
          <div class='col-lg-3 col-lg-offset-1'>
          <label>E-mail id</label>  
          </div>
          <div class='col-lg-5'>
          <input type='E-mail' name='' value='<?php echo $row[2] ?>' class='form-control' disabled=''><br>
          </div>
        </div>  

        
      <div class='row'>
        <div class='col-lg-3 col-lg-offset-1' >
        <label>Mobile No</label>
        </div>
        <div class='col-lg-5' >
        <input type='Number' name='' value='<?php echo $row[3] ?>' class='form-control'  disabled=''><br>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-lg-offset-6">
           <!-- <button type="submit" name="save" class="btn btn-lg btn-success btn-block">Edit Details</button> -->
          <input type="submit" name="" value="Edit Details" class="btn btn-lg btn-success btn-block form-control">
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