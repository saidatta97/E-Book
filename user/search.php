<?php
session_start();
if(!isset($_SESSION['user']))
{
header("location:../index.php");
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
    <title>Search Books</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">

    <style type="text/css">
        .design{
            margin-left: 10%;
        }
    </style>

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
            
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title" style="margin-top:1%; margin-left:10%">Search For Books</h2><br>
                        <div class="panel panel-default">
                            <div class="panel-heading"></div>
                            <div class="panel-body design">
                                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Sr. no.</th>
                                            <th>File</th>
                                            <th>Cover Photo</th>
                                            <th>Book Name</th>
                                            <th>Category Name</th>
                                            <th>Author</th>
                                            <th>Reg Date </th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sr. no</th>
                                            <th>File</th>
                                            <th>Cover Photo</th>
                                            <th>Book Name</th>
                                            <th>Category Name</th>
                                            <th>Author</th>
                                            <th>Reg Date</th>
                                                                                 
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
echo"<td><a href='../admin/books/$row1->file' target='_blank' >$row1->file</td>";
echo"<td><a href='books_cover_photo/$row1->cover_photo' target='_blank' ><img src='../admin/books_cover_photo/$row1->cover_photo'  style='max-height: 45px; max-width: 95px; margin-left:20px;'></td>";
?>  
<td><?php echo $row1->name;?></td>
<td><?php echo $row1->category;?></td>
<td><?php echo $row1->author;?></td>
<td><?php echo $row1->date;?></td>
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

<footer>
                <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>(C) 2020. All Rights Reserved E-Books Reader</h5>
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
    
</body>

</html>