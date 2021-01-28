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
    <title>EBOOK READER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">

     <!-- <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">     -->

    <link rel="stylesheet" href="css/styles.css">
    <style type="text/css">
    
    .align{
        margin-left: 10%;
    }       
 
    </style>

    <script src="https://kit.fontawesome.com/b71c055e2e.js" crossorigin="anonymous"></script>

</head>

<body>
<?php
    include("header.php");
?>


    <section class="slider">
        <div class="container">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="slide">
                        <img src="images/slide1.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">
                                <h3>welcome to E-Book</h3>
                                <h5>Discover the best books online with us</h5>
                                <a href="books.php" class="btn">READ books</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <img src="images/slide2.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">
                                <h3>welcome to E-Book</h3>
                                <h5>Discover the best books online with us</h5>
                                <a href="books.php" class="btn">READ books</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <img src="images/slide3.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">
                                <h3>welcome to E-BOOK</h3>
                                <h5>Discover the best books online with us</h5>
                                <a href="books.php" class="btn">READ books</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <img src="images/slide4.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">
                                <h3>welcome to E-Book</h3>
                                <h5>Discover the best books online with us</h5>
                                <a href="books.php" class="btn">READ books</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <section class="about-sec">
        <div class="about-img">
            <figure style="background:url(./images/about-img.jpg)no-repeat;"></figure>
        </div>
        <div class="about-content">
            <h2>About E-Book Library ,</h2>
            <p class="about-txt text-center">
                A room without books is like a body without a soul. E-Book Library website lets you browse from our wide variety of books present in our library. You can download the books for offline reading and even discover new books from the library categories. Indulge and satisfy your craving for thought-provoking books available in domain
            </p>
            <div class="btn-sec">
                <a href="books.php" class="btn yellow">READ Books</a>
                
            </div>
        </div>
    </section>


    <section class="recent-book-sec">
        <div class="container">
            <div class="title">
                <h2>LATEST BOOKS</h2>
                <hr>
            </div>

           <?php
           include("config.php");
           $query1="select * from books order by id desc limit 5";
           $res1=mysqli_query($mysqli,$query1);
           echo"<div class='row'>";
           while ($row1=mysqli_fetch_row($res1))
            {  
            echo"
            
                <div class='col-lg-2 col-md-2 col-sm-2'>
                    <div class='item'>
                        <img src='../admin/books_cover_photo/$row1[6]' alt='img' height='260%' width='260%'>
                        <h3><a href='../admin/books/$row1[5]' target='_blank'>$row1[1]</a></h3>
                    </div>
                </div>";
            }
                ?>
                
            </div>
            <div class="btn-sec">
                <a href="books.php" class="btn yellow">view all books</a>
            </div>
        </div>
    </section>
    <div class="align">
    <div class="title-section py-4">
                <h3 class="main-title-w3_pvt">Contact us</h3>
                <span class="title-line">
                </span>
            </div>

    <form action="#" method="post" class="register-wthree">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>
                                            First name
                                        </label>
                                        <input class="form-control" type="text" placeholder="First Name" name="fname"
                                            required="">
                                    </div>
                                    <div class="col-md-4 mt-md-0 mt-4">
                                        <label>
                                            Last name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Last Name" name="lname" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>
                                            Mobile
                                        </label>
                                        <input class="form-control" type="number" placeholder="Contact No" name="mobile"
                                            required="">
                                    </div>
                                    <div class="col-md-4 mt-md-0 mt-4">
                                        <label>
                                            Email
                                        </label>
                                        <input class="form-control" type="email" placeholder="example@email.com" name="email"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            Your message
                                        </label>
                                        <textarea placeholder=" type your message here" class="form-control" name="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-w3_pvt btn-block w-100 font-weight-bold text-uppercase bg-theme1" name="feedback">Send</button>
                                </div>
                            </div>
                        </form>
                      </div>
                      <br/>  
       
        <footer>
        
        </div>
        <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>(C) 2020. All Rights Reserved. E-Book Reader</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="share align-middle">
                            <span class="fb"><i class="fa fa-facebook-official"></i></span>
                            <span class="instagram"><i class="fa fa-instagram"></i></span>
                            <span class="twitter"><i class="fa fa-twitter"></i></span>
                            <span class="pinterest"><i class="fa fa-pinterest"></i></span>
                            <span class="google"><i class="fa fa-google-plus"></i></span>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    

</body>

</html>

<?php
if(isset($_POST['feedback']))
           
{
           

             $fname=$_POST['fname'];
             $lname=$_POST['lname'];
             $email=$_POST['email'];
             $mobile=$_POST['mobile'];
             $message=$_POST['message'];
 
            include("config.php"); 
            
               $query1="insert into feedback (fed_fname,fed_lname,fed_mobile,fed_email,fed_message) values(?,?,?,?,?)";
            $stmt1 = $mysqli->prepare($query1);
            $rc1=$stmt1->bind_param('ssiss',$fname,$lname,$mobile,$email,$message);
            $stmt1->execute();               
          
            echo"<script>alert('Message Send.');</script>";
            echo "<script>window.location.href='index.php';</script>";
          
}
?>
