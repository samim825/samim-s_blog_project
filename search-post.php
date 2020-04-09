<?php
include('admin/includes/config.php');
 $search = $_GET['search'];
       if($search==NULL){
           header('location:blog.php');
       }
?>
<!DOCTYPE html>
<html>
<?php include 'head.php';  ?>
    <body>

        <!-- START LOADER -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">Loading...</div>
            </div>
        </div>
        <!-- END LOADER -->

        <!-- START NAVBAR -->
        <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo" href="index.php">
                    <img src="images/logo.png" alt="" class="img-fluid logo-light"> 
                    <img src="images/logo-dark.png" alt="" class="img-fluid logo-dark">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Go Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->

        <!--Start Home-->
        <section class="header_section section">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-white text-center">
                            <h2 class="font-weight-bold"><!-- Can write something--></h2>
                            <div class="home_divider mt-3 mb-3 mx-auto"></div>
                            <div class="page_link text-uppercase"> 
                                <a href="index.php" class="d-inline-block mr-1">Home</a> / <span class="text-white ml-1">Blog</span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Home-->


        
        <!-- Start Blog -->
        <section class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <?php
                        
      
       $sql="select tblposts.id as postid,tblposts.PostImage,tblposts.PostTitle,tblposts.StartingPara,tblposts.quote,tblposts.EndingPara,tblposts.PostingDate,tblcategory.CategoryName as category,tblcategory.id as catid from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId  where tblposts.PostTitle Like '%$search%' and tblposts.Is_Active=1";
       $query=mysqli_query($con,$sql); 
       $col = mysqli_num_rows($query);
       
       if($col==0){
       
?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <blockquote style="border-left: 2px solid #065fd4;width: 400px;"><p style="color: #065fd4;"><b>No result found related to your search keyword !
                    </b></p></blockquote>

                    
                    <br><div class="form-button">
                        <a href="blog.php"><button class="contact-submit" onclick="goBack()"><i class="icofont icofont-double-left"></i> Go Back</button></a>
                    </div>
                
                </div>
                        
                        <?php
       }else{
             while($row=mysqli_fetch_array($query))
{
         ?>
                          
                        <div class="text-center mt-3 rounded bg-white p-2">
                            <div class="img_blog">
                                <a href="single-post.php?pid=<?php echo htmlentities($row['postid']); ?>"><img src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" alt="" class="img-fluid rounded mx-auto d-block"></a>
                            </div>
                            <div class="content_blog pt-3 pb-3">
                                <div>
                                    <h5 class="font-weight-bold mb-0"><a href="single-post.php?pid=<?php echo htmlentities($row['postid']); ?>" class="text-dark"><?php echo htmlentities($row['PostTitle']); ?></a></h5>
                                </div>
                                <div class="mt-3">
                                    <p class="font-weight-bold h6 mb-3"><a href="categorized-post.php?id=<?php echo htmlentities($row['catid']); ?>" class="text-custom"><?php echo htmlentities($row['category']); ?></a></p>
                                    <p class="h6 text-muted date_blog mb-0">  
                                        <?php $date = $row["PostingDate"]; echo date('F j , Y', strtotime($date));  ?>
                                        <a href="#" class="text-dark font-weight-bold"><!--You can wite witer name here---></a></p>
                                    <p class="mt-3 desc_blog pl-2 pr-2 text-muted"><?php  $pt=$row['StartingPara']; echo  (substr($pt,0));?></p>
                                    <p class="h6 mb-0"><a href="single-post.php?pid=<?php echo htmlentities($row['postid']); ?>" class="text-muted font-weight-bold">Read More...</a></p>
                                </div>
                            </div>
                        </div> 
     
   
       <?php }} ?>
                    </div>
                    <div class="col-lg-4">
                        <div class="mt-3 blog_sidebar rounded">
                            <div class="bg-white p-4">
                                <!-- Search widget-->
                                <div class="widget side_widget_search">
                                    <div class="sidebar_widget_title font-weight-bold text-uppercase">Search</div>
                                    <img src="images/divider.html" alt="" class="d-block mt-2 mb-4">
                                    <form action="search-post.php" method="Get">
                                        <input class="form-control" type="search" name="search" placeholder="Search..." required>
                                        <button class="search_icon" name="submit" type="submit">
                                            <span class="mdi mdi-magnify"></span>
                                        </button>
                                    </form>
                                </div>

                                <!-- Categories -->
                                <div class="widget mt-5">
                                    <div class="sidebar_widget_title font-weight-bold text-uppercase">Categories</div>
                                    <ul class="list-unstyled widget_list">
                                    <?php
                                    $query=mysqli_query($con,"select *from tblcategory where Is_Active=1 ");
                                    while($row=mysqli_fetch_array($query))
                                    {
                                     ?>
                                        <li><a href="categorized-post.php?id=<?php echo htmlentities($row["id"]); ?>"><i class="mdi mdi-chevron-double-right"></i> <b><?php echo htmlentities($row["CategoryName"]); ?></b></a></li>
                                    <?php } ?>
                                    </ul>
                                </div>

                                <!-- Recent Post -->
                                <div class="widget mt-5 widget_recent_entries_custom">
                                    <div class="sidebar_widget_title font-weight-bold text-uppercase">Recent Post</div>
                                    <img src="images/divider.html" alt="" class="d-block mt-2 mb-4">
                                    <ul class="list-unstyled">
                                        <?php
                                    $query=mysqli_query($con,"select *from tblposts WHERE Is_Active =1 order by id desc LIMIT 5 ");
                                    while($row=mysqli_fetch_array($query))
                                    {
                                     ?>
                                        <li class="clearfix">
                                            <div class="re_post_img">
                                                <a href="single-post.php?pid=<?php echo htmlentities($row["id"]); ?>">
                                                    <img src="admin/postimages/<?php echo htmlentities($row["PostImage"]); ?>" alt="" class="img-fluid rounded">
                                                </a>
                                            </div>
                                            <div class="re_post_desc">
                                                <a href="single-post.php?pid=<?php echo htmlentities($row["id"]); ?>" class="font-weight-bold"><?php echo htmlentities($row["PostTitle"]); ?></a> 
                                                <span class="post-date fonts-italic">
                                        <?php $date = $row["PostingDate"]; echo date('F j , Y', strtotime($date));  ?></span>
                                            </div>
                                        </li>
                                     <?php } ?>
                                    </ul>
                                </div>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog -->

        <?php include 'footer.php'; ?>

    </body>

</html>