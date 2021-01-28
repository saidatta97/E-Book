<!DOCTYPE html>
<html>
<head>
	<title>Send SMS otp</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/aos.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
     <link href="css/font-awesome.min.css" rel="stylesheet">
     <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <script type="text/javascript">
    $(document).ready(function()
    {
  
    //alert("hi");
    // $("#otp").hide();
    //  $("#submit").click(function(){
    // $("forgot").hide();
    // $("otp").show();
  });

    //});
    </script>


   
</head>
<body>
<div class="container">
<h1 class="text-center">Forgot password</h1>
<hr>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<?php
			if(isset($_POST['sendopt'])) {
				require('sms/textlocal.class.php');
				require('sms/credential.php');

				$textlocal = new Textlocal(false, false, API_KEY);

                // You can access MOBILE from credential.php
				// $numbers = array(MOBILE);
                // Access enter mobile number in input box
                $numbers = array($_POST['mobile']);
                $name=$_POST['uname'];
				$sender = 'TXTLCL';
                $mobile=$_POST['mobile'];
				$otp = mt_rand(10000, 99999);
				$message = "Hello " . $_POST['uname'] . " This is your OTP: " . $otp;

			
				    $result = $textlocal->sendSms($numbers, $message, $sender);
				    setcookie('otp', $otp);
                    setcookie('name', $name);
                    setcookie('mobile', $mobile);                    
                    // $code=$otp;
				    echo "OTP successfully send";
			 
			}

			if(isset($_POST['verify'])) { 
				$otp = $_POST['otp1'];
                 // echo "<script>alert('hii');</script>"; 
				if($_COOKIE['otp'] == $otp) {
                     // echo " correct otp";
                     // echo "<script>window.location.href='changepassword.php?mobile=".$_COOKIE['mobile']."';</script>";
					// header('location:changepassword.php?id=".$name."');
                    echo "<script>
                        var r=confirm('OTP Verified. Press ok to Change Password');
                        if(r == true)
                        {
                            window.location.href='changepassword.php?mobile=".$_COOKIE['mobile']."';
                        }
                        else
                        {
                            window.location.href='index.php';   
                        }
                        </script>";
				} else {
					echo "Please enter correct otp.";
				}
			}
		?>
	</div>
</div>
    <div class="col-sm-6 col-sm-offset-3" style="margin-left: 400px;">
        <div id="forgot">
        <form role="form" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <br>
                    <br>
                    <label for="uname">Name</label>
                    <input type="text" class="form-control" id="uname" name="uname" value="" maxlength="30" placeholder="Enter your name" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" value="" maxlength="10" placeholder="Enter valid mobile number" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="sendopt" id="submit" class="btn btn-lg btn-success btn-block">Send OTP</button>
                </div>
            </div>
            </form>
            </div>
            <div id="otp">
            <form method="POST" action="">
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="otp">OTP</label>
                    <input type="text" class="form-control" id="otp" name="otp1" placeholder="Enter OTP" maxlength="5" required="">
                </div>
            </div>
             <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="verify" class="btn btn-lg btn-info btn-block">Verify</button>
                </div>
            </div>
        </form>
        </div>
	</div>
</div>
</body>
</html>