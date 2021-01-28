<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>E-BOOK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"/>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/aos.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- top header -->
    <div class="header-top bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="d-sm-flex header-w3_pvt">
                        <li>
                            <span class="fa fa-envelope-open"></span>
                            <a href="mailto:example@email.com" class="text-white">ebookonline@gmail.com</a>
                        </li>
                        <li>
                            <span class="fa fa-phone"></span>
                            <p class="d-inline text-white">+91-8552954424</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 hearder-right-w3_pvt">
                    <ul class="d-sm-flex header-w3_pvt justify-content-lg-end">
                        <li><button type="button" class="btn w3ls-btn d-block" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal1">
                                <span class="fa fa-sign-in"></span>Register
                            </button>
                        </li>
                        <li>
                            <button type="button" class="btn w3ls-btn btn-2  d-block" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal">
                                <span class="fa fa-lock"></span> Sign in
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- //top header -->
    <!-- banner -->
    <div id="home">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light"  data-aos="fade-down">
                <h1>
                    <a class="navbar-brand text-white" href="index.php" data-aos="zoom-in">
                        E-BOOK Library
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active  mr-lg-3 mt-lg-0 mt-3" data-aos="zoom-in">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3" data-aos="zoom-in">
                            <a class="nav-link scroll" href="#about">about</a>
                        </li>
                        
                        <li class="nav-item  mt-lg-0 mt-3" data-aos="zoom-in">
                            <a class="nav-link scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        <!-- //header -->
        <div class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li class="banner banner1">
                    <div class="container">
                        <div class="banner-text">
                            <div class="slider-info">
                                <span  data-aos="zoom-in">Books Reader</span>
                                <h3  data-aos="zoom-in">Read More & gain Knowledge</h3>
                                <a  data-aos="zoom-in" class="btn btn-primary mt-4 w3_pvt-link-bnr scroll bg-theme1" href="#about" role="button">View
                                    More</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="banner banner2">
                    <div class="container">
                        <div class="banner-text">
                            <div class="slider-info">
                                <span data-aos="zoom-in">Books Reader</span>
                                <h3 data-aos="zoom-in">Read More & gain Knowledge</h3>
                                <a data-aos="zoom-in" class="btn btn-primary mt-4 w3_pvt-link-bnr scroll bg-theme1" href="#about" role="button">View
                                    More</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- //banner -->
    <!-- about -->
    <div class="about-w3sec py-md-5" id="about">
        <div class="container py-sm-5 py-4">
            <div class="title-section pb-4"  data-aos="fade-up">
                <h3 class="main-title-w3_pvt">Online Reader</h3>
                <span class="title-line">
                </span>
                <p class="about-txt text-center">

                    A room without books is like a body without a soul. E-Book Library website lets you browse from our wide variety of books present in our library. You can download the books for offline reading and even discover new books from the library categories. Indulge and satisfy your craving for thought-provoking books available in domain!


                </p>
            </div>

            
        </div>
    </div>
             <div class="contact-wthree" id="contact">
        <div class="container py-sm-5">
            <div class="title-section py-4">
                <h3 class="main-title-w3_pvt">contact us</h3>
                <span class="title-line">
                </span>
            </div>
            <div class="row py-lg-5 py-4">
                <div class="col-lg-5" data-aos="zoom-in">
                    <div class="w3_pvt-contact-top">
                        <h4>Get in touch </h4>
                        <p>Goa University</p>
                    </div>
                    <hr>
                    <p>
                        
                    </p>
                    <!-- map -->
                    <div class="map">
                        <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Goa%20university%20India%20goa+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">gps coordinates</a></iframe></div><br />
                    </div>
                    <!--// map-->
                </div>
                <div class="offset-1"></div>
                <div class="col-lg-6 mt-lg-0 mt-5" data-aos="zoom-in">
                    <!-- register form grid -->
                    <div class="register-top1">
                        <form action="#" method="post" class="register-wthree">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            First name
                                        </label>
                                        <input class="form-control" type="text" placeholder="First Name" name="fname"
                                            required="">
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-4">
                                        <label>
                                            Last name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Last Name" name="lname" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            Mobile
                                        </label>
                                        <input class="form-control" type="number" placeholder="Contact No" name="mobile"
                                            required="">
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-4">
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
                                    <div class="col-md-12">
                                        <label>
                                            Your message
                                        </label>
                                        <textarea placeholder=" type your message here" class="form-control" name="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-w3_pvt btn-block w-100 font-weight-bold text-uppercase bg-theme1" name="feedback">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--  //register form grid ends here -->
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footerv4-w3ls" id="footer">
        <div class="footerv4-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 footv4-left" data-aos="fade-up">

                        <h2>
                            <a href="index.html">E-BOOK</a>
                        </h2>
                        <p class="text-white">
                            
                        </p>


                    </div>
                    <div class="col-lg-2 col-sm-6 footv4-content mt-sm-0 mt-4" data-aos="fade-up">
                        <h3>Navigation</h3>
                        <ul class="v4-content">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="#about" class="scroll">About Us</a>
                            </li>

                            <li>
                                <a href="#contact" class="scroll">contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 footv4-left fv4-g3 my-lg-0 mt-4" data-aos="fade-up">
                        <div class="footerv4-social">
                            <h3>stay connected</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-facebook-f icon_facebook"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-twitter icon_twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-dribbble icon_dribbble"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-google-plus icon_g_plus"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- //footer social -->
                    </div>
                    <div class="col-lg-3 col-sm-6 footv4-left my-lg-0 my-4" data-aos="fade-up">
                        <h3>contact</h3>
                        <ul class="d-flex header-agile pt-0 flex-column">
                            <li>
                                <span class="fa fa-envelope-open"></span>
                                <a href="mailto:example@email.com" class="text-white">ebookonline@gmail.com</a>
                            </li>
                            <li class="mt-3">
                                <span class="fa fa-phone"></span>
                                <p class="d-inline text-white">+91-8552954424</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /footerv4-top -->
        </div>
    </div>
    <!-- //footer -->
    <div class="cpy-right bg-theme">
        <p>© 2020 E-Book. All rights reserved
        </p>
    </div>
    <!-- login  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-theme1">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Signin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" class="p-3">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder="" name="email" id="username"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="" name="password" id="password"
                                required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" name="login" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col forgot-w3l text-right">
                                <a href="forgot_pass.php"  class="text-white">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center dont-do text-white">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-white">
                                Register Now</a>

                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
    <!-- register -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-theme1">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="register.php" method="post" class="p-3">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" placeholder="" name="name" id="recipient-rname"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder="" name="email" id="recipient-email"
                                required="">
                        </div>

                        <div class="form-group">
                            <label for="mobile" class="col-form-label">Mobile</label>
                            <input type="Number" class="form-control" placeholder="" maxlength="10" minlength="10" name="mobile" id="mobile"
                                required="">
                        </div>

                        <div class="form-group">
                            <label for="password1" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="" name="password" id="password1"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="" name="cpassword" id="password2"
                                required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" name="register" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- // register -->
    <!-- forgot password -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-theme1">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Forgot Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="post" class="p-3" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                    <input type="Number" class="form-control" id="mobile" name="mobile" value="" maxlength="10" placeholder="Enter valid mobile number" required="">
                        </div>

                        <div class="form-group">
                        <button type="submit" name="sendopt" class="btn btn-lg btn-success btn-block">Send OTP</button>
                        </div>
                    </form>
                    <form  method="post" class="p-3">
                        <div class="form-group">
                            <label for="otp">OTP</label>
                            <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP" maxlength="5" required="">
                        </div>

                    <div class="form-group">
                        <button type="submit" name="verifyotp" class="btn btn-lg btn-info btn-block">Verify</button>
                    </div>
                        
                        <!-- <div class="right-w3l">
                            <input type="submit" class="form-control" name="forgot" value="Forgot Password">
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
        <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
     <!-- script for password match
    Banner  Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto:true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //Banner  Responsiveslides -->
    <script src='js/aos.js'></script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
    </script>

    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <script src="js/counter.js"></script>
    <!-- //stats -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>


<?php
if(isset($_POST['login']))          
{
           

             $email=$_POST['email'];
             $password=$_POST['password'];
             
            include("config.php"); 
            $query=mysqli_query($mysqli,"SELECT * from user_reg where user_email='$email' and user_password='$password'");
            $num_rows=mysqli_num_rows($query);
            $row=mysqli_fetch_array($query);
            if($num_rows > 0)
                {
                        // echo "<script>alert(' login.');</script>";         
                        // header("location:dashboard.php");
                        $_SESSION['id']=$row['user_id'];
                        $_SESSION['user']=$row['user_name'];
                        
                         echo "<script>window.location.href='user/index.php';</script>";
                        // header("location:admin/dashboard.php");
                }
                else
                {
                    $query1=mysqli_query($mysqli,"SELECT * from admin where email='$email' and password='$password'");
                    $num_rows1=mysqli_num_rows($query1);
                    $row1=mysqli_fetch_array($query1);
                    if($num_rows1 > 0)
                    {
                        //header("location:admin/dashboard.php");
                        // session_start();
                        $_SESSION['id']=$row1['id'];
                        $_SESSION['user']=$row1['username'];
                        
                         echo "<script>window.location.href='admin/dashboard.php';</script>";  
                         // header("location:admin/dashboard.php");
                             
                    }
                    else
                    {
                        echo "<script>alert(' Error.');</script>";           
                    }
            
                }
          
}
?>

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


<?php
include('config.php');
if(isset($_POST['forgot']))
{
        $email=$_POST['email'];
        $stmt=$mysqli->prepare("SELECT user_email,user_password FROM user_reg WHERE (user_email=?) ");
        $stmt->bind_param('s',$email);
        $stmt->execute();
        $stmt -> bind_result($email,$password);
        $rs=$stmt->fetch();
        if($rs)
        {
        echo "<script>alert('Password : $password');</script>";       
        }
        else
        {
          echo "<script>alert('Invalid Email/Contact no or password');</script>";
        }
}
        //header("location:index.php");
        ?>



