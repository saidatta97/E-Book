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


    <style>
    .dropbtn {
      background-color: orange;
      color: white;
      padding: 12px;
      font-size: 12px;
      border: none;
      cursor: pointer;
    }

    .dropbtn:hover, .dropbtn:focus {
      background-color: #5f6661;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      overflow: auto;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown a:hover {background-color: #ddd;}

    .show {display: block;}
    </style>
    
</head>

<body>

    <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>

    <header>
        <?php
            include("header.php");
        ?>
    </header>
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="index.php">Home</a>
            <span class="breadcrumb-item active">E-Books &nbsp; &nbsp;</span>

                <div class="dropdown">
                  <button onclick="myFunction()" class="dropbtn">Select Category</button>
                  <div id="myDropdown" class="dropdown-content">

                    <?php $query ="SELECT * FROM books_cat";
                    $stmt2 = $mysqli->prepare($query);
                    $stmt2->execute();
                    $res=$stmt2->get_result();
                    while($row=$res->fetch_object())
                    {
                    ?>

                    <a href="cat_books.php?id=<?php echo $row->name;?>"><?php echo $row->name;?></a>
                    
                    <?php } ?>

                  </div>
                </div>

                                                    

        </div>

    </div>
    <section class="static about-sec">
        <div class="container">
           <?php

           $id=$_GET['id'];
           echo "<h2> $id E-Books</h2>";
           ?>
            
            <div class="recomended-sec">
                <div class="row">
                      <?php
           include("config.php");
           
           $query1="select * from books where category='$id'";
           $res1=mysqli_query($mysqli,$query1);
           while ($row1=mysqli_fetch_row($res1))
          {
                    echo"
                    <div class='col-lg-3 col-md-6'>
                        <div class='item'>
                            <img src='../admin/books_cover_photo/$row1[6]' alt='img'>
                            <h3>$row1[1]</h3>";
                            ?>

                            <h6><a href="desc_books.php?id=<?php echo $row1[0];?>">About Book</a></h6>
                            <div class='hover'>
                            
                            
                                <a href="desc_books.php?id=<?php echo $row1[0];?>">
                            <span><i class='fa fa-long-arrow-right' aria-hidden='true'></i></span>
                            </a>
                           
                            </div>
                        </div>
                    </div>
              <?php      
              }
              ?>      
                                    </div>
            </div>
                    </div>
    </section>
    <?php
        include("footer.php");
    ?>