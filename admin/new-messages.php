<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{

?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>New Messages</title>
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
                                    <h4 class="page-title">New Messages</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Messages </a>
                                        </li>
                                        <li class="active">
                                          New Messages
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


<div class="row">
<div class="col-sm-6">


</div>
                                 
                                <div class="row">
										<div class="col-md-12">
											<div class="demo-box m-t-20">
<?php
    if(isset($_GET['seenid'])){
        $seenid = $_GET['seenid'];
       $query= mysqli_query($con,"UPDATE tblmessages
                  SET status = '1'
                  WHERE id = '$seenid'");
        if($query){
           echo "<span style='color:green;'>Message Sent To Seen Folder !</span>"; 
        } else {
            echo "<span style='color:red;'>Something Went Wrong. Try Again !</span>";
        }
    }
?>
												<div class="table-responsive">
                                                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th> Name</th>
                                                                <th>Email</th>
                                                                <th>Subject</th>
                                                                <th>Message</th>
                                                                <th>Recieving Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
<?php

$query=mysqli_query($con,"SELECT * FROM tblmessages WHERE status='0' ORDER BY id DESC");
$cnt=1;
while($row=mysqli_fetch_array($query))
 {
?>
 <tr>

<td><?php echo $cnt; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['subject']; ?></td>
<td><?php echo $row['message']; ?></td>
<td><?php echo $row['receivingDate']; ?></td>
<td>
    <a href="view-message.php?msgid=<?php echo $row['id']; ?>">View</a> ||
    <a onclick="return confirm('Are You Sure To Move This Message ?'); " href="?seenid=<?php echo $row['id']; ?>">Mark As Seen</a>

</td>
</tr>
<?php $cnt++; } ?>
</tbody>
                                                  
            </table>
        </div>




	</div>

</div>


</div>
<!--- end row -->


                                    
<div class="row">
<div class="col-md-12">
<div class="demo-box m-t-20">
<div class="m-b-30">


 </div>
 </div>

	</div>


</div>                  
                                  
</div> <!-- container -->

                </div> <!-- content -->
<?php include('includes/footer.php');?>
            </div>

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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>