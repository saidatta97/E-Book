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
    <title>Read</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/styles.css">


    
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
            <span class="breadcrumb-item active">Read &nbsp; &nbsp;</span><hr/><br>

                 <?php

                    $book_id=$_GET['book_id'];

                 ?>          
                                                               
                    <?php
                        echo"
                         <iframe src='../admin/books/$book_id' width='100%' height='800px'>READ
                              
                         </iframe>";

                  ?>
  


        </div>

    </div>
    <section class="static about-sec">
        <div class="container">
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