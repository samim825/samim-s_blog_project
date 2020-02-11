<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
$posttitle=$_POST['playlist'];
$postdetails=$_POST['description'];
$arr = explode(" ",$posttitle);
$url=implode("-",$arr);
$imgfile=$_FILES["postimage"]["name"];
// //get the image extension
//$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
//// allowed extensions
//$allowed_extensions = array(".jpg","jpeg",".png",".gif");
//// Validation for allowed extensions .in_array() function searches an array for a specific value.
//if(!in_array($extension,$allowed_extensions))
//{
//echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
//}
//else
//{
//rename the image file
$imgnewfile=($imgfile).$extension;
// Code for move image into directory
move_uploaded_file($_FILES["postimage"]["tmp_name"],"playlistimages/".$imgnewfile);

$status=1;
$query=mysqli_query($con,"insert into tblplaylist(PlaylistName,Description,Is_Active,PlaylistImage,Url) values('$posttitle','$postdetails','$status','$imgnewfile','$url')");
if($query)
{
$msg="Playlist successfully added ";
}
else{
$error="Something went wrong . Please try again.";    
} 


}
?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Roaring Bangladesh | Add Play list</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

<!-- Top Bar Start -->
 <?php include('includes/topheader.php');?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>
 <!-- Left Sidebar End -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Add Playlist</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Playlist </a>
                                        </li>
                                        <li class="active">
                                            Add Playlist
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Add Playlist </b></h4>
                                    <hr />
                        		


<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>





                        			<div class="row">
                        				<div class="col-md-6">
                        					<form class="form-horizontal" name="playlist" method="post">
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Playlist</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="" name="playlist" required>
	                                                </div>
	                                            </div>
	                                     
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Playlist Description</label>
	                                                <div class="col-md-10">
	                                                    <textarea class="form-control" rows="5" name="description" required></textarea>
	                                                </div>
	                                            </div>
                                                                    
                                                                    
<div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Playlist Image</b></h4>
<input type="file" class="form-control" id="postimage" name="postimage" >
</div>
</div>
</div>

        <div class="form-group">
                                                    <label class="col-md-2 control-label">&nbsp;</label>
                                                    <div class="col-md-10">
                                                  
                                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                    Submit
                                                </button>
                                                    </div>
                                                </div>

	                                        </form>
                        				</div>


                        			</div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

<?php include('includes/footer.php');?>

            </div>
        </div>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>