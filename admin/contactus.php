<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['update'])) {   
        $name = $_POST['name'];
        $designation = $_POST['designation'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $web = $_POST['web'];
        $address = $_POST['address'];
        $developer = $_POST['developer'];
        $facebook = $_POST['facebookId'];
        $linkedIn = $_POST['linkedInId'];
        $twitter = $_POST['twitterId'];
        $instragram = $_POST['instragramId'];
        $github = $_POST['github'];
        $description = $_POST['description'];
        $cvfile=$_FILES["cv"]["name"];
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
$cvnewfile=($cvfile).$extension;
$imgnewfile=($imgfile).$extension;
// Code for move image into directory
move_uploaded_file($_FILES["postimage"]["tmp_name"],"images/".$cvnewfile);

move_uploaded_file($_FILES["postimage"]["tmp_name"],"images/".$imgnewfile);
        

        $query = mysqli_query($con, "update tblcontact set name='$name',designation = '$designation', mobile='$mobile',email='$email',web='$web',address='$address',developer='$developer',facebook='$facebook',linkedIn='$linkedIn',twitter='$twitter',instragram='$instragram',description='$description',github = '$github',cv='$cvnewfile',image='$imgnewfile' where id = 1 ");
        if ($query) {
            $msg = "Contact  page successfully updated ";
        } else {
            $error = "Something went wrong . Please try again.";
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
            <title> Contact us Page</title>

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
                <?php include('includes/topheader.php'); ?>
                <!-- ========== Left Sidebar Start ========== -->
                <?php include('includes/leftsidebar.php'); ?>
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
                                        <h4 class="page-title">Edit Contact us Page  </h4>
                                        <ol class="breadcrumb p-0 m-0">
                                            <li>
                                                <a href="#">Pages</a>
                                            </li>

                                            <li class="active">
                                                Contact us
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
                                    <?php if ($msg) { ?>
                                        <div class="alert alert-success" role="alert">
                                            <strong>Well done!</strong> <?php echo htmlentities($msg); ?>
                                        </div>
                                    <?php } ?>

                                    <!---Error Message--->
                                    <?php if ($error) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <strong>Oh snap!</strong> <?php echo htmlentities($error); ?></div>
                                    <?php } ?>


                                </div>
                            </div>
                            
                                
                            <!-- end row -->

<div class="container-fluid">                       
                                <div class="col-sm-12">
                                    <div class="card-box">
                                        <h4 class="m-t-0 header-title"><b>Edit Contact Us </b></h4>
                                        <hr />



<?php 
$query=mysqli_query($con,"Select *from  tblcontact ");
while($row=mysqli_fetch_array($query))
{
?>

                                        <div class="row">
                                            <div class="col-md-11">
                                                <form name="contactus" method="post" class="form-horizontal" enctype="multipart/form-data">
                                                    <div class="form-group m-b-20">
                                                        <h4 class="col-md-2 header-title control-label"><b>Name</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" value="<?php echo htmlentities($row['name']);?>" name="name" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-b-20">
                                                        <h4 class="col-md-2 header-title control-label"><b>Your designation</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" value="<?php echo htmlentities($row['designation']);?>" name="designation" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-b-20">
                                                        <h4 class="col-md-2 header-title control-label"><b>Mobile</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" value="<?php echo htmlentities($row['mobile']);?>" name="mobile" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h4 class="col-md-2 header-title control-label"><b>E-mail</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="email" class="form-control" value="<?php echo htmlentities($row['email']);?>" name="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-b-20">
                                                        <h4 class="col-md-2 header-title control-label"><b>Web</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" value="<?php echo htmlentities($row['web']);?>" name="web" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h4 class="col-md-2 header-title control-label"><b>Address</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" value="<?php echo htmlentities($row['address']);?>" name="address" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">                                                       
                                                        <h4 class="col-md-2 header-title control-label"><b>Developer Link</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" value="<?php echo htmlentities($row['developer']);?>" name="developer" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">                                                       
                                                        <h4 class="col-md-2 header-title control-label"><b>Facebook Link</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" value="<?php echo htmlentities($row['facebook']);?>" name="facebookId" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">                                                       
                                                        <h4 class="col-md-2 header-title control-label"><b>LinkedIn Link</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" value="<?php echo htmlentities($row['linkedIn']);?>" name="linkedInId" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">                                                        
                                                        <h4 class="col-md-2 header-title control-label"><b>Twitter Link</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" value="<?php echo htmlentities($row['twitter']);?>" name="twitterId" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h4 class="col-md-2 header-title control-label"><b>Instragram Link</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" value="<?php echo htmlentities($row['instragram']);?>" name="instragramId">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h4 class="col-md-2 header-title control-label"><b>Git Link</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" value="<?php echo htmlentities($row['github']);?>" name="github">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h4 class="col-md-2 header-title control-label"><b>CV Link</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="file" class="form-control" id="image" name="cv" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h4 class="col-md-2 header-title control-label"><b>Image</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="file" class="form-control" id="image" name="postimage" value="test">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <h4 class="col-md-2 header-title control-label"><b>Describe about me</b></h4>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control summernote " rows="5" name="description"  ><?php echo htmlentities($row['description']);?></textarea><br>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">&nbsp;</label>
                                                        <div class="col-md-10">
                                                            <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="update">
                                                                Update</button>
                                                            
                                                        </div>
                                                    </div>

                                                </form> 
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end row -->

                            </div>

                        </div> <!-- container -->

                    </div> <!-- content -->

                    <?php include('includes/footer.php'); ?>

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

                jQuery(document).ready(function () {

                    $('.summernote').summernote({
                        height: 240, // set editor height
                        minHeight: null, // set minimum height of editor
                        maxHeight: null, // set maximum height of editor
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
<?php } }?>