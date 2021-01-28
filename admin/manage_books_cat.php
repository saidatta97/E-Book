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

if(isset($_GET['del']))
{
	$id1=intval($_GET['del']);
	$adn="delete from books_cat where id=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$id1);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Data Deleted');</script>" ;
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
	<title>Manage Books Category</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php include('header.php');?>

	<div class="ts-main-content">
			<?php include('sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title" style="margin-top:4%">Manage Books Category</h2><br>
						<div class="panel panel-default">
							<div class="panel-heading">All Book Category Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sno.</th>
											<th>Book Category Name</th>
											<th>Reg Date </th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Sno</th>
											<th>Book Category Name</th>
											<th>Reg Date</th>
											<th>Action</th>										
										</tr>
									</tfoot>
									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from books_cat";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res1=$stmt->get_result();
$cnt=1;
while($row1=$res1->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row1->name;?></td>
<td><?php echo $row1->date;?></td>
<!-- <td><a href="edit_books_cat.php?id=<?php echo $row->id;?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp; -->
<td><a href="manage_books_cat.php?del=<?php echo $row1->id;?>" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a></td>
										</tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
										
									</tbody>
								</table>

								
							</div>
						</div>

					
					</div>
				</div>

			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
