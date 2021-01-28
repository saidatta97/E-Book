<!DOCTYPE html>
<html>
<head>
	<title>change password</title>
	<!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
     <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/aos.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
     <link href="css/font-awesome.min.css" rel="stylesheet">
     <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
   
</head>
<body>
<div class="container">
	<br>
	<br>
<h1 class="text-center">Change Password</h1>
<hr>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<?php
			if(isset($_POST['change'])) {
				$npassword=$_POST['npassword'];
				$cpassword=$_POST['cpassword'];
				if(strcmp($npassword,$cpassword)==0)
				{
					// echo "<script>alert('hii');</script>";
					include('config.php');
				
					$mobile=$_GET['mobile'];
					$con="update user_reg set user_password=? where user_mobile=?";
						$chngpwd1 = $mysqli->prepare($con);
						$chngpwd1->bind_param('si',$npassword,$mobile);
				  		$chngpwd1->execute();
						echo "<script>
						var r=confirm('Password changed Successfully');
						if(r == true)
						{
							window.location.href='index.php';
						}
						</script>";
						

	 			
				}				
}

			
?>
	</div>
</div>
    <div class="col-sm-6 col-sm-offset-3" style="margin-left: 400px;">
        <form role="form" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-9 form-group">
                    <br>
                    <br>
                    <label for="Password">New Password</label>
                    <input type="password" class="form-control" id="npassword" name="npassword" value=""  placeholder="Enter New Password" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="Confirm Password">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword" value=""  placeholder="Confirm Password" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="change" class="btn btn-lg btn-success btn-block">Change Password</button>
                </div>
            </div>
            </form>
            
	</div>
</div>
</body>
</html>