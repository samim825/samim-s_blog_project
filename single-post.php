<!DOCTYPE html>
<?php
include('admin/includes/config.php');
?>
<html>
    
<?php include 'head.php'; 
 $postid = intval($_GET['pid']);
                        if($postid==NULL){
                            header('location:blog.php');
                        }
 else {
$query=mysqli_query($con,"select tblposts.id as postid,tblposts.PostingDate,tblposts.PostImage,tblposts.PostTitle as title,tblposts.StartingPara,tblposts.quote,tblposts.EndingPara,tblcategory.CategoryName as category,tblcategory.id as catid from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId  where tblposts.id='$postid' and tblposts.Is_Active=1 ");
$col=  mysqli_num_rows($query);
if ($col==0){
    header('location:blog.php');
}
 }
                        
?>
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
        <section class="section">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-white text-center">
                            <h2 class="font-weight-bold">Single Post</h2>
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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog_box bg-white rounded p-2 mt-3">
                                    <?php
$postid=intval($_GET['pid']);
$query=mysqli_query($con,"select tblposts.id as postid,tblposts.PostingDate,tblposts.PostImage,tblposts.PostTitle as title,tblposts.StartingPara,tblposts.quote,tblposts.EndingPara,tblcategory.CategoryName as category,tblcategory.id as catid from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId  where tblposts.id='$postid' and tblposts.Is_Active=1 ");
$col=  mysqli_num_rows($query);
if ($col==0){
    header('location:blog.php');
}
while($row=mysqli_fetch_array($query))
{
?>
                                    <div class="img_blog">
                                        <img src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" alt="" class="img-fluid rounded mx-auto d-block">
                                    </div>
                                    <div class="blog_detail rounded m-2 p-4 bg-white">
                                        <h4 class="font-weight-bold"><?php echo htmlentities($row['title']); ?></h4>
                                        <p class="mt-3 text-muted"><?php  $pt=$row['StartingPara']; echo  (substr($pt,0));?></p>
                                        <p class="blockquote"><?php echo  htmlentities($row['quote']); ?></p>
                                        <p class="mt-3 text-muted"><?php  $pt=$row['EndingPara']; echo  (substr($pt,0));?></p>
                                        <div class="blog_detail_devider"></div>
                                        <div class="clearfix mt-3">
                                            <p class="text-muted float-left mb-0">Category :<a href="categorized-post.php?id=<?php echo  htmlentities($row['catid']); ?>"><?php echo  htmlentities($row['category']); ?></a> </p>
                                            <span class="text-muted float-right">
            <?php $date = $row["PostingDate"]; echo date('F j , Y', strtotime($date));  ?></span>
                                        </div>
<?php }?>

                                        <div class="blog_detail_devider mt-3"></div>

                                        <div class="comments-form mt-5">
                                            <div class="leave-comment mt-40">
                                    <h3 class="leave-comment-text">Comments Zone</h3>
                                    <div id="disqus_thread"></div>
<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://samim-hossain.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
                            </div>
                                        
                                        </div>
                                    </div>
                                </div>                        
                            </div>                          
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mt-3 blog_sidebar rounded">
                            <div class="bg-white p-4">
                                <!-- Search widget-->
                                <div class="widget side_widget_search">
                                    <div class="sidebar_widget_title font-weight-bold text-uppercase">Search</div>
                                    <img src="images/divider.html" alt="" class="d-block mt-2 mb-4">
                                    <form action="search-post.php" method="GET">
                                        <input class="form-control" type="search" name="search" placeholder="Search...">
                                        <button class="search_icon" type="submit">
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