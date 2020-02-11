<!DOCTYPE html>
<html>
    
<!-- Mirrored from themesboss.com/elvish/blog-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 12:15:56 GMT -->
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
                            <h2 class="font-weight-bold">Latest News</h2>
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
                        <?php for($i=1;$i<=3;$i++){ ?>
                        <div class="text-center mt-3 rounded bg-white p-2">
                            <div class="img_blog">
                                <img src="images/blog/blog-1.jpg" alt="" class="img-fluid rounded mx-auto d-block">
                            </div>
                            <div class="content_blog pt-3 pb-3">
                                <div>
                                    <h5 class="font-weight-bold mb-0"><a href="blog-single.html" class="text-dark">There are many variations</a></h5>
                                </div>
                                <div class="mt-3">
                                    <p class="font-weight-bold h6 mb-3"><a href="#" class="text-custom">Lifestyle</a></p>
                                    <p class="h6 text-muted date_blog mb-0">13 February 2018 <a href="#" class="text-dark font-weight-bold">By Envato</a></p>
                                    <p class="mt-3 desc_blog pl-2 pr-2 text-muted">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    <p class="h6 mb-0"><a href="blog-single.html" class="text-muted font-weight-bold">Read More...</a></p>
                                </div>
                            </div>
                        </div>  
                        <?php }?>
                         
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <div class="text-center mt-3">
                                    <ul class="pagination d-block mx-auto">
                                        <li class="next"><a href="#"><i class="mdi mdi-chevron-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li class="prev"><a href="#"><i class="mdi mdi-chevron-right"></i></a></li>
                                    </ul>
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
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search...">
                                        <button class="search_icon" type="submit">
                                            <span class="mdi mdi-magnify"></span>
                                        </button>
                                    </form>
                                </div>

                                <!-- Categories -->
                                <div class="widget mt-5">
                                    <div class="sidebar_widget_title font-weight-bold text-uppercase">Categories</div>
                                    <img src="images/divider.html" alt="" class="d-block mt-2 mb-3">
                                    <ul class="list-unstyled widget_list">
                                        <li><a href="#"><i class="mdi mdi-chevron-double-right"></i> Journey</a></li>
                                        <li><a href="#"><i class="mdi mdi-chevron-double-right"></i> Photography</a></li>
                                        <li><a href="#"><i class="mdi mdi-chevron-double-right"></i> Lifestyle</a></li>
                                        <li><a href="#"><i class="mdi mdi-chevron-double-right"></i> Food & Drinks</a></li>
                                    </ul>
                                </div>

                                <!-- Recent Post -->
                                <div class="widget mt-5 widget_recent_entries_custom">
                                    <div class="sidebar_widget_title font-weight-bold text-uppercase">Recent Post</div>
                                    <img src="images/divider.html" alt="" class="d-block mt-2 mb-4">
                                    <ul class="list-unstyled">
                                        <li class="clearfix">
                                            <div class="re_post_img">
                                                <a href="#">
                                                    <img src="images/blog/blog-1.jpg" alt="" class="img-fluid rounded">
                                                </a>
                                            </div>
                                            <div class="re_post_desc">
                                                <a href="#" class="font-weight-bold">Top Things To San Francisco</a> 
                                                <span class="post-date fonts-italic">Jun 15, 2017</span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="re_post_img">
                                                <a href="#">
                                                    <img src="images/blog/blog-2.jpg" alt="" class="img-fluid rounded">
                                                </a>
                                            </div>
                                            <div class="re_post_desc">
                                                <a href="#" class="font-weight-bold">Venenatis vol utpat ele ifend</a> 
                                                <span class="post-date fonts-italic">Jun 15, 2017</span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="re_post_img">
                                                <a href="#">
                                                    <img src="images/blog/blog-3.jpg" alt="" class="img-fluid rounded">
                                                </a>
                                            </div>
                                            <div class="re_post_desc">
                                                <a href="#" class="font-weight-bold">Mattis felis nonummy cras.</a> 
                                                <span class="post-date fonts-italic">Jun 15, 2017</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Archives -->
                                <div class="widget mt-5">
                                    <div class="sidebar_widget_title font-weight-bold text-uppercase">Archives</div>
                                    <img src="images/divider.html" alt="" class="d-block mt-2 mb-3">
                                    <ul class="list-unstyled widget_list">
                                        <li><a href="#"><i class="mdi mdi-chevron-double-right"></i> January 2018</a></li>
                                        <li><a href="#"><i class="mdi mdi-chevron-double-right"></i> February 2018</a></li>
                                        <li><a href="#"><i class="mdi mdi-chevron-double-right"></i> March 2018</a></li>
                                        <li><a href="#"><i class="mdi mdi-chevron-double-right"></i> April 2018</a></li>
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

<!-- Mirrored from themesboss.com/elvish/blog-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 12:15:56 GMT -->
</html>