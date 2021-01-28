<?php
    //session_start();
    $id=$_SESSION['id'];
    $user=$_SESSION['user'];
    //echo "<script>alert('$user');</script>";         
    include("config.php");
    $query="SELECT * from user_reg where user_id='$id' ";
    $res=mysqli_query($mysqli,$query);
    $row=mysqli_fetch_row($res);
?>
    <script src="https://kit.fontawesome.com/b71c055e2e.js" crossorigin="anonymous"></script>


<header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"><a href="index.php" class="web-url">E-book Library</a></div>
                    <div class="col-md-4 offset-1" >
                        <h5>Online Reader ||  Save time </h5></div>
                    <div class="col-md-3">
                        <span class="ph-number">Call : 91+8552954424</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php">E-book Library</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="navbar-item active">
                                <a href="index.php" class="nav-link">Home</a>
                            </li>

                            <li class="navbar-item">
                                <a href="books.php" class="nav-link">Books</a>
                            </li>

                            <!-- <li class="navbar-item">
                                <a href="about.html" class="nav-link">About</a>
                            </li>
                             -->
                            <li class="navbar-item">
                                <a href="search.php" class="nav-link">Search For Book</a>                
                            </li>

                            <li class="navbar-item">
                                <a href="whitlist.php" class="nav-link" ><i class="fas fa-heart"></i>  Wishlist </a>                
                            </li>

                        </ul>
                        <div class="cart my-2 my-lg-0">
                            <span>
                                <i class="" aria-hidden="true"></i></span>
                            <!-- <span class="quntity">3</span> -->
                        </div>
                        <!-- <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search">
                            <span class="fa fa-search"></span>
                        </form> -->
                         <ul class="navbar-nav ml-auto">
                           
                        <li>
                            <div class="dropdown show">
                                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Your Account
                                      </a>

                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="viewprofile.php">Profile</a>
                                        <a class="dropdown-item" href="changepass.php">Change Password</a>
                                        <a class="dropdown-item" href="logout.php">Logout(<?php echo $row[1]; ?>)</a>
                                      </div>
                            </div>

                        </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    