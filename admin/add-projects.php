<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{

// For adding post  
if(isset($_POST['submit']))
{
$projectName=$_POST['projectName'];
$liveLink=$_POST['liveLink'];
$builtWith=$_POST['builtWith'];
$quote=$_POST['quote'];
$details=$_POST['details'];
$imgfile=$_FILES["postimage"]["name"];

$imgnewfile=($imgfile).$extension;
// Code for move image into directory
move_uploaded_file($_FILES["postimage"]["tmp_name"],"postimages/".$imgnewfile);

$query=mysqli_query($con,"insert into tblprojects(projectName,liveLink,builtWith,quote,description,image) values('$projectName','$liveLink','$builtWith','$quote','$details','$imgnewfile')");
if($query)
{
$msg="Project successfully added ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}


if($_GET['action']='del')
{
$projectid=intval($_GET['rid']);
$delquery=mysqli_query($con,"delete from tblprojects where id='$projectid'");
 
}

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title> Add Projects</title>

        <!-- Summernote css -->
        <link href="../plugins/summernote/summernote.css" rel="stylesheet" />

        <!-- Select2 -->
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- Jquery filer css -->
        <link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

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
            <!-- ========== Left Sidebar Start ========== -->
             <?php include('includes/leftsidebar.php');?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Add Projects </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Projects</a>
                                        </li>
                                        <li>
                                            <a href="#">Add Projects </a>
                                        </li>
                                        <li class="active">
                                            Add Projects
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

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
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">
<form name="addpost" method="post" enctype="multipart/form-data">
 <div class="form-group m-b-20">
<label for="exampleInputEmail1">Project Name :</label>
<input type="text" class="form-control" id="posttitle" name="projectName" placeholder="Enter project name" required>
</div>

<form name="addpost" method="post" enctype="multipart/form-data">
 <div class="form-group m-b-20">
<label for="exampleInputEmail1">Live link :</label>
<input type="text" class="form-control" id="posttitle" name="liveLink" placeholder="Enter project name" required>
</div>    
    
 <div class="form-group m-b-20">
<label for="exampleInputEmail1">Built with :</label>
<input type="text" class="form-control" id="posttitle" name="builtWith" placeholder="Enter technologies name" required>
</div>
     
    
<div>
<label for="exampleInputEmail1">Important line :</label>
<textarea class="summernote" name="quote" required></textarea>
</div>    

<div>
<label for="exampleInputEmail1">Projects Details</label>
<textarea class="summernote" name="details" required></textarea>
</div>
    

<div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Projects Image</b></h4>
<input type="file" class="form-control" id="postimage" name="postimage" >
</div>
</div>
</div>


<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Save and Post</button>
<button type="reset" class="btn btn-danger waves-effect waves-light">Discard</button>
                                        </form>
                                    </div>
                                </div> <!-- end p-20 -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


 <div class="row">
                                <div class="col-md-12">
                                    <div class="demo-box m-t-20">
                                        <div class="m-b-30">

                                            <h4><i class="fa fa-user" ></i> Projects List</h4>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table m-0 table-colored-bordered table-bordered-danger">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Project name</th>
                                                        <th>Built with</th>
                                                        <th>Details</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
    <?php
    $query = mysqli_query($con, "Select *from  tblProjects");
    $cnt = 1;
    while ($row = mysqli_fetch_array($query)) {
        ?>

                                                        <tr>
                                                            <th scope="row"><?php echo htmlentities($cnt); ?></th>
                                                            <td><?php echo htmlentities($row['projectName']); ?></td>
                                                            <td><?php echo htmlentities($row['builtWith']); ?></td>
                                                            <td><?php $pt=$row['description']; echo  (substr($pt,0));?></td>
                                                            <td><a href="edit-project.php?id=<?php echo htmlentities($row['id']); ?>"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a> 
                                                                &nbsp;<a href="add-projects.php.php?rid=<?php echo htmlentities($row['id']); ?>&&action=del"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
                                                        </tr>
        <?php
        $cnt++;
    }
    ?>
                                                </tbody>

                                            </table>
                                        </div>




                                    </div>

                                </div>


                            </div> 
                    </div> <!-- container -->

                </div> <!-- content -->

           <?php include('includes/footer.php');?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



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

        <!--Summernote js-->
        <script src="../plugins/summernote/summernote.min.js"></script>
        <!-- Select 2 -->
        <script src="../plugins/select2/js/select2.min.js"></script>
        <!-- Jquery filer js -->
        <script src="../plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- page specific js -->
        <script src="assets/pages/jquery.blog-add.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>

            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 240,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });
            });
        </script>
  <script src="../plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="../plugins/summernote/summernote.min.js"></script>

    


    </body>
</html>
<?php  ?>