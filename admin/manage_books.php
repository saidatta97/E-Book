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
   	//echo "<script>alert('$user');</script>";         
    include("config.php");
    $query="SELECT * from admin where id='$id' ";
    $res=mysqli_query($mysqli,$query);
    $row=mysqli_fetch_row($res);
	if(isset($_GET['del']))
	{

		$id1=intval($_GET['del']);
		//echo "<script>alert($id1);</script>" ;
		$adn="delete from books where id=?";
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
	<title>Manage books</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+510+',height='+430+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}
</script>

</head>

<body>
	<?php include('header.php');?>

	<div class="ts-main-content">
			<?php include('sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title" style="margin-top:4%">Manage Books</h2><br>
						<div class="panel panel-default">
							<div class="panel-heading">All Book Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sno.</th>
											<th>File</th>
											<th>Cover Photo</th>
											<th>Book Name</th>
											<th>Category Name</th>
											<th>Author</th>
											<th>Reg Date </th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Sno</th>
											<th>File</th>
											<th>Cover Photo</th>
											<th>Book Name</th>
											<th>Category Name</th>
											<th>Author</th>
											<th>Reg Date</th>
											<th>Action</th>										
										</tr>
									</tfoot>
									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from books";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res1=$stmt->get_result();
$cnt=1;
while($row1=$res1->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;;?></td>
	<?php
echo"<td><a href='books/$row1->file' target='_blank' >$row1->file</td>";
echo"<td><a href='books_cover_photo/$row1->cover_photo' target='_blank' ><img src='books_cover_photo/$row1->cover_photo'  style='max-height: 45px; max-width: 95px; margin-left:20px;'></td>";
?>	
<td><?php echo $row1->name;?></td>
<td><?php echo $row1->category;?></td>
<td><?php echo $row1->author;?></td>
<td><?php echo $row1->date;?></td>
<td><a href="edit_books.php?id=<?php echo $row1->id;?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
<a href="manage_books.php?del=<?php echo $row1->id;?>" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a></td>
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
