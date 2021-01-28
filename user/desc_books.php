<?php
session_start();
if(!isset($_SESSION['user']))
{
header("location:../index.php");
}
?>

<?php
    
    if(isset($_GET['whitlist']))
    {
             $count=0;
             $book_id=$_GET['whitlist'];
             $user_id=$_SESSION['id'];

                include("config.php");    

                $query3="select * from whitlist where book_id=$book_id and user_id=$user_id";
                $res3=mysqli_query($mysqli,$query3);
                while ($row3=mysqli_fetch_row($res3))
                {
                    $count++;
                }
                if($count==0)
                {

                    $query2="insert into whitlist (book_id,user_id) values (?,?)";
                    $stmt2 = $mysqli->prepare($query2);
                    $rc2=$stmt2->bind_param('ii',$book_id,$user_id);
                    $stmt2->execute();
                    echo"<script>alert('Book has been added to whitlist');</script>"; 

                     echo "<script>window.location.href='books.php';</script>";
                }
                else
                {
                     echo"<script>alert('Book already added to whitlist');</script>";

                      echo "<script>window.location.href='books.php';</script>"; 
                }       
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>E-Book</title>
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
            <span class="breadcrumb-item active">DESCRIPTION</span>
        </div>
    </div>
    <section class="product-sec">
        <div class="container">

            <?php
           include("config.php");
           $id=$_GET['id'];
           $query1="select * from books where id=$id";
           $res1=mysqli_query($mysqli,$query1);
           while ($row1=mysqli_fetch_row($res1))
          {

            echo"
            <h1>$row1[1]</h1>
            <div class='row'>
                <div class='col-md-6 slider-sec'>
                     <img src='../admin/books_cover_photo/$row1[6]' alt='img'>
                
                </div>
                <div class='col-md-6 slider-content'>
                    <h1>DESCRIPTION</h1>
                    <p>$row1[4] </p>
                 </div>   
                    <div class='btn-sec'>

                        <hr/>
                 <br/>

                        <a href='read.php?book_id=$row1[5]' target='_blank'><button class='btn ''>Read</button></a>
                         <a href='../admin/books/$row1[5]' download><button class='btn ''>Download</button></a>
                         <a href='desc_books.php?whitlist=$row1[0]'><button class='btn' onclick='return confirm('Do you want to add to whitlist');' >Read later </button></a>
                    </div>
                
            </div>
        </div>
    </section>
    ";
            }
            ?>

    <section class="related-books">
                    <div class="btn-sec">
                        <hr/>
                        <center><a href="books.php"><button class="btn ">All Books</button></a></center>
                        <hr/>
                    </div>
    </section>

      <script type="text/javascript">
        function whitlist()
        {
            // <?php

            //     $book_id=$_GET['id'];
            //     $user_id=$_SESSION['id'];

            //     include("config.php");    
            //     $query2="insert into whitlist (book_id,user_id) values (?,?)";
            //     $stmt2 = $mysqli->prepare($query2);
            //     $rc2=$stmt2->bind_param('ii',$book_id,$user_id);
            //     $stmt2->execute();
            //     echo"<script>alert('Book has been added to whitlist');</script>";   

            // ?>
        }
    </script>
  
    <footer>
        <?php
            include("footer.php");
        ?>
     </footer>  