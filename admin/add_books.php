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
//code for add courses
if(isset($_POST['submit']))
{

	 $file=$_FILES['bk_file']['name'];
	 $size=$_FILES['bk_file']['size'];
	 $type=$_FILES['bk_file']['type'];
	 $temp=$_FILES['bk_file']['tmp_name'];
	 // $caption1=$_POST['caption'];
	 //$link=$_POST['link'];
	 move_uploaded_file($temp,"books/".$file);

	 $cover_photo=$_FILES['photo']['name'];
	 $size1=$_FILES['photo']['size'];
	 $type1=$_FILES['photo']['type'];
	 $temp1=$_FILES['photo']['tmp_name'];
	 // $caption1=$_POST['caption'];
	 //$link1=$_POST['link'];
	 move_uploaded_file($temp1,"books_cover_photo/".$cover_photo);

	$bk_name=$_POST['bk_name'];
	$bk_cat=$_POST['bk_cat'];
	$author=$_POST['author'];
	$bk_description=$_POST['description'];
	$query1="insert into books (name,category,author,description,file,cover_photo) values (?,?,?,?,?,?)";
	$stmt1 = $mysqli->prepare($query1);
	$rc1=$stmt1->bind_param('ssssss',$bk_name,$bk_cat,$author,$bk_description,$file,$cover_photo);
	$stmt1->execute();
	echo"<script>alert('Book has been added successfully');</script>";
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
	<title>Add Book</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
</head>
<body>
	<?php 
	include('header.php');
	?>
	<div class="ts-main-content">
		<?php 
		include('sidebar.php');
		?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
						<br><br>						
						<h2 class="page-title">Add Book </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add a Book</div>
									<div class="panel-body">
	
										<form method="post" enctype="multipart/form-data" class="form-horizontal">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Select Book Category  </label>
												<div class="col-sm-8">
													<Select name="bk_cat" class="form-control" required>
														<option value="">Select Category</option>
														<?php $query ="SELECT * FROM books_cat";
														$stmt2 = $mysqli->prepare($query);
														$stmt2->execute();
														$res=$stmt2->get_result();
														while($row=$res->fetch_object())
														{
														?>
														<option value="<?php echo $row->name;?>"> <?php echo $row->name;?></option>
														<?php } ?>
													</Select>
												</div>
											</div>

											<div class="form-group">
											<label class="col-sm-2 control-label">Book Name</label>
											<div class="col-sm-8">
											<input type="text" class="form-control" name="bk_name" id="bk_name" value="" required="required">
											</div>
											</div>

											
											<div class="form-group">
											<label class="col-sm-2 control-label">Book File</label>
											<div class="col-sm-8">
											<input type="file" class="form-control" name="bk_file" id="bk_file" value="" required="required">
											</div>
											</div>


											<div class="form-group">
											<label class="col-sm-2 control-label">Book Cover Photo</label>
											<div class="col-sm-8">
											<input type="file" class="form-control" name="photo" id="photo" value="" required="required">
											</div>
											</div>


											<div class="form-group">
											<label class="col-sm-2 control-label">Author Name</label>
											<div class="col-sm-8">
											<input type="text" class="form-control" name="author" id="author" value="" required="required">
											</div>
											</div>
											<div class="form-group">
											<label class="col-sm-2 control-label">Book Description</label>
											<div class="col-sm-8">
												&nbsp;&nbsp;&nbsp;
											<textarea class="form-group" cols="50" rows="4" name="description" id="description" value="" required="" width=""></textarea>
											</div>
											</div>

											<div class="col-sm-12 col-sm-offset-2">
											<input class="btn btn-primary" type="submit" name="submit" value="Add Book ">
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