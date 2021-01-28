<?php
session_start();
if(!isset($_SESSION['user']))
{
header("location:../index.php");
}
?>

<?php
//session_start();
include('config.php');
$id=$_SESSION['id'];
$user=$_SESSION['user'];
$query="SELECT * from admin where id='$id' ";
$res=mysqli_query($mysqli,$query);
$row=mysqli_fetch_row($res);

if(isset($_POST['submit']))
{
$book_category=$_POST['bc'];


$query1="insert into books_cat (name) values(?)";
$stmt1 = $mysqli->prepare($query1);
$rc1=$stmt1->bind_param('s',$book_category);
$stmt1->execute();
echo"<script>alert('Book Category Added Successfully');</script>";
}

?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Add Books Categories</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
</head>
<body>
	<?php include('header.php');?>
	<div class="ts-main-content">
		<?php include('sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Add Book Category </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Book Categories</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Book Category Name </label>
												<div class="col-sm-8">
													<input type="text" value="" name="bc"  class="form-control" required=""> 
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-8">
						 							
												</div>
											</div>
											


												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Add Category">
												</div>
											</div>

										</form>

									</div>
								</div>
									
							
							</div>
						
									
							

							</div>
						</div>

					</div>
				</div> 	
				

			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</script>
</body>

</html>
