<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    if ($_GET['action'] == 'del' && $_GET['rid']) {
        $id = intval($_GET['rid']);
        $query = mysqli_query($con, "delete from  tbleducation  where id='$id'");
        $msg = "Information deleted ";
    }
    if (isset($_POST['submit'])) {
        $date = $_POST['date'];
        $instituteName = $_POST['instituteName'];
        $certificateName = $_POST['certificateName'];
        $details = $_POST['details'];


        $query = mysqli_query($con, "insert into tbleducation(date,instituteName,certificateName,details) values('$date','$instituteName','$certificateName','$details')");
        if ($query) {
            $msg = "Certification details added successfully";
        } else {
            $error1 = "Something went wrong . Please try again.";
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
            <title>Education Page</title>

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
                                        <h4 class="page-title">About Page  </h4>
                                        <ol class="breadcrumb p-0 m-0">
                                            <li>
                                                <a href="#">Pages</a>
                                            </li>

                                            <li class="active">
                                                About us
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



                            <br>

                            <div class="container-fluid">                       
                                <div class="col-sm-12">
                                    <div class="card-box">
                                        <h4 class="m-t-0 header-title"><b>Add Studied Information </b></h4>
                                        <hr />





                                        <div class="row">
                                            <div class="col-md-11">
                                                <form name="education" method="post" class="form-horizontal" enctype="multipart/form-data">
                                                    <div class="form-group m-b-20">
                                                        <h4 class="col-md-2 header-title control-label"><b>Date</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" placeholder="Enter date" name="date">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h4 class="col-md-2 header-title control-label"><b>Instituion Name</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" placeholder="Enter Instituion Name" name="instituteName" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">                                                       
                                                        <h4 class="col-md-2 header-title control-label"><b>Certificate name</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" placeholder="Enter Certificate name" name="certificateName" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">                                                       
                                                        <h4 class="col-md-2 header-title control-label"><b>Details</b></h4>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" placeholder="Write details about certificate" name="details" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">&nbsp;</label>
                                                        <div class="col-md-10">
                                                            <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                                Submit</button>
                                                        </div>
                                                    </div>

                                                </form> 
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end row -->

                            </div>



                            <div class="row">
                                <div class="col-md-12">
                                    <div class="demo-box m-t-20">
                                        <div class="m-b-30">

                                            <h4><i class="fa fa-user" ></i> Examination List</h4>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table m-0 table-colored-bordered table-bordered-danger">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th> Date</th>
                                                        <th>Institute name</th>
                                                        <th>Certificate name</th>
                                                        <th>Details</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
    <?php
    $query = mysqli_query($con, "Select *from  tbleducation");
    $cnt = 1;
    while ($row = mysqli_fetch_array($query)) {
        ?>

                                                        <tr>
                                                            <th scope="row"><?php echo htmlentities($cnt); ?></th>
                                                            <td><?php echo htmlentities($row['date']); ?></td>
                                                            <td><?php echo htmlentities($row['instituteName']); ?></td>
                                                            <td><?php echo htmlentities($row['certificateName']); ?></td>
                                                            <td><?php echo htmlentities($row['details']); ?></td>
                                                            <td><a href="edit-education.php?id=<?php echo htmlentities($row['id']); ?>"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a> 
                                                                &nbsp;<a href="education.php?rid=<?php echo htmlentities($row['id']); ?>&&action=del"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
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

            <script src="../plugins/switchery/switchery.min.js"></script>

            <!--Summernote js-->
            <script src="../plugins/summernote/summernote.min.js"></script>




        </body>
    </html>
<?php
}?>