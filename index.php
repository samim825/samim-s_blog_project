<?php
include('admin/includes/config.php');
?>

<?php
$msg = "";
$error = "";
if (isset($_POST['submit'])) {   
        $name = $_POST['name'];    
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $query=mysqli_query($con,"insert into tblmessages(name,email,subject,message) values('$name','$email','$subject','$message')");
        if($query) {
            $msg = "Message sent successfully ";
        } else {
            $error = "Something went wrong . Please try again.";
        }
    }


?>
<html lang="en">

<?php include 'head.php';  ?>

    <body>
        <!-- START NAVBAR -->
        <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo" href="index.php">
<!--                        <img src="images/logo.png" alt="" class="img-fluid logo-light"> 
                        <img src="images/logo-dark.png" alt="" class="img-fluid logo-dark">-->
                    <h3 style="color: black;">Samim Hossain</h3>
<!--                    <h3 style="color: black;" class="img-fluid logo-light">Samim Hossain</h3>-->
                    </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="mdi mdi-menu"></i>
                    </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#education" class="nav-link">Education</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link">Projects</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#experience" class="nav-link">Experience</a>
                        </li>

                        <li class="nav-item">
                            <a href="#skills" class="nav-link">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a href="#client" class="nav-link">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a href="blog.php" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->

        <!--START HOME-->
        <section class="section h-100vh bg-dark" id="home">
            <div class="bg-overlay"></div>
            <a id="video" class="youtube-bg" data-property="{videoURL:'https://www.youtube.com/watch?v=pGbIOC83-So',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
            <div class="home-table">
                <div class="home-table-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="text-white text-center">
                                     <?php
        $query=mysqli_query($con,"Select *from  tblcontact");
        while($row=mysqli_fetch_array($query))
        {                                       
?>
                                    <h4>Hello & Welcome</h4>
                                    <h1 class="header_title mb-0 mt-3">I Am <span class="element font-weight-bold" data-elements="<?php echo htmlentities($row['name']); ?>,A Web Developer."></span></h1>
                                    <ul class="social_home list-unstyled text-center pt-4">
                                        <li class="list-inline-item"><a href="<?php echo htmlentities($row['facebook']); ?>"><i class="mdi mdi-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="<?php echo htmlentities($row['linkedIn']); ?>"><i class="mdi mdi-linkedin"></i></a></li>
                                        <li class="list-inline-item"><a href="<?php echo htmlentities($row['twitter']); ?>"><i class="mdi mdi-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="<?php echo htmlentities($row['instragram']); ?>"><i class="mdi mdi-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="<?php echo htmlentities($row['github']); ?>"><i class="mdi mdi-github-circle"></i></a></li>
                                    </ul>
         
                                    <div class="header_btn">
                                        <a href="Samim.pdf" class="btn btn-outline-custom btn-rounded mt-4">Download CV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll_down">
                <a href="#about" class="scroll">
                    <i class="mbri-arrow-down text-white"></i>
                </a>
            </div>
        </section>
        <!--END HOME-->

        <!-- START ABOUT -->
        <section class="section" id="about" >
            <div class="container">
                <div class="row">
           <div class="col-lg-6">
                        <div>
                            <img src="admin/images/<?php echo $row['image']; ?>" alt="" class="img1 img-fluid mx-auto d-block" style="width:250px;height:250px; " >
                        </div>
                        <div class="text-center about-detail mx-auto mt-5">
                            <h3 class="mb-3">Hello! <span class="font-weight-bold text-custom">I'M <?php echo htmlentities($row['name']); ?></span></h3>
                            <ul class="mb-0 list-inline text-center about-work">
                                <li class="list-inline-item mr-0 text-muted"><?php echo htmlentities($row['designation']); ?></li>
                            </ul>
                        </div>
               <div class="text-center mt-4">
                            <ul class="list-inline fot_social mb-0">
                                <li class="list-inline-item"><a href="<?php echo htmlentities($row['facebook']); ?>" class="social-icon text-muted"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo htmlentities($row['twitter']); ?>" class="social-icon text-muted"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo htmlentities($row['linkedIn']); ?>" class="social-icon text-muted"><i class="mdi mdi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo htmlentities($row['instragram']); ?>" class="social-icon text-muted"><i class="mdi mdi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo htmlentities($row['github']); ?>" class="social-icon text-muted"><i class="mdi mdi-github-circle"></i></a></li>                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class=" mx-auto section-main-title">
                            <h2><span class="font-weight-bold">About </span>Me</h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p><?php  $pt=$row['description']; echo  (substr($pt,0));?>.</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
        <!-- END ABOUT -->
        
                <!-- START EDU. -->
        <section class="section bg-color" id="education">
            <div class="row justify-content-center" style="padding-bottom:10px;">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2 style="color: white;"><span class="font-weight-bold">Education</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="timeline">
        
                <?php $cnt=1;
                 $query=mysqli_query($con,"Select *from  tbleducation");
        while($row=mysqli_fetch_array($query))
         {
                    if($cnt%2==0){
                        echo '<div class="container1 right">';
                    }
 else {
     echo '<div class="container1 left">';
 }
                ?>
  
    <div class="content">
        <h3><?php echo htmlentities($row['date']); ?></h3>
        <h4><?php echo htmlentities($row['certificateName']); ?></h4>
        <h6><?php echo htmlentities($row['instituteName']); ?></h6>
        <p class="cv_desc mb-0"><?php echo htmlentities($row['details']); ?></p>
    </div>
  </div>
                
                <?php $cnt++; }?>             

        </section>
        <!-- END  EDU. -->

        <!-- START project -->
        <section class="section bg-light" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2>My <span class="font-weight-bold">Projects</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2"></p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                                                 <?php
        $query=mysqli_query($con,"Select *from  tblprojects");
        while($row=mysqli_fetch_array($query))
        {                                       
?>
                    <div class="col-lg-4">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
<!--                            <div class="ser_icon">
                                <i class="mbri-database"></i>
                            </div>-->
                            <div class="service-content mt-4">
                                <h4 class="font-weight-bold"><a href="projects.php?projectid=<?php echo $row['id']; ?>"><?php echo htmlentities($row['projectName']); ?></a></h4>
                                <p class="mt-3 text-muted mb-0"><?php  $pt=$row['quote']; echo  (substr($pt,0));?></p>
                            </div>
                        </div>
                    </div>
                     <?php }?>
                </div>
            </div>
        </section>
        <!-- END project -->


        
         <!-- START EXP. -->
        <section class="section" id="experience">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-center mx-auto section-main-title">
                            <h2><span class="font-weight-bold">Experiance</span></h2>                         
                        </div>
                </div>               

                            
                          <div class="col-lg-6">
                        <div class="cv_edu_exp mt-3">
                             <?php
        $query=mysqli_query($con,"Select *from  tblexperience");
        while($row=mysqli_fetch_array($query))
        {                                       
?>
                            <div class="cv_edu_exp_box mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cv_edu_exp_year font-weight-bold text-custom position-relative"><?php echo htmlentities($row['date']); ?></div>
                                        <div class="cb_edu_exp_detail">
                                            <h4><?php echo htmlentities($row['designation']); ?></h4>
                                            <h6><?php echo htmlentities($row['companyName']); ?></h6>
                                            <p class="cv_desc mb-0"><?php echo htmlentities($row['details']); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>                           
                        </div>
                    </div>   
                </div>
            </div>
        </section>       
                            
<!--     End Experience                       -->
        
        <!-- START CTA -->
        <section class="section bg-cta">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-white">
                            <h1>I Am Available For Freelancer.</h1>
                            <div class="mt-4">
                                <a href="#" class="btn btn-outline-custom">Hire Me!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CTA -->
              
        <!--Skills Start-->
    <section class="section bg-light"  id="skills">
        <div class="container">
            <br><br>
                <div class="row" >
                    <div class="col-lg-6">
                        <div class="text-center mx-auto section-main-title">
                            <br><br>
                            <h2><span class="font-weight-bold">Skills</span></h2>                         
                        </div>
                </div> 
                    
                    <?php
        $query=mysqli_query($con,"Select *from  tblskills");
        while($row=mysqli_fetch_array($query))
        { 
         ?>
                    
                    <div class="col-lg-6">
                        <div class="progress-bars skill-custom">
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left"><?php echo htmlentities($row['frontEnd']); ?></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left"><?php echo htmlentities($row['proLang']); ?></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left"><?php echo htmlentities($row['framework']); ?></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left"><?php echo htmlentities($row['databaseLang']); ?></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left"><?php echo htmlentities($row['git']); ?></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
        <?php } ?>
                </div>
              </div>
        </section>
<!--Skills end-->                      
                            
 
        <!-- START CLIENT -->
        <section class="section bg-client" id="client">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto text-white section-main-title">
                            <h2><span class="font-weight-bold">Reviews from People</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
<!--                            <p class="mx-auto mt-2"> You can write here. </p>-->
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-12">
                        <div id="owl-demo" class="owl-carousel">
                             <?php
        $query=mysqli_query($con,"Select *from  tblreviews");
        while($row=mysqli_fetch_array($query))
        {                                       
?> 
                            <div class="text-white people_says text-center">
                                <div class="people_icon">
                                    <i class="mbri-user"></i>                                
                                </div>
                                <div class="people_review_box mt-4">
                                    <p class="people_name text-white h5 font-weight-bold mb-0"><?php echo htmlentities($row['name']); ?></p>
                                    <p class="h6"><?php echo htmlentities($row['designation']); ?></p>
                                    <p class="people_review text-white mx-auto pt-3 mb-0">"<?php echo htmlentities($row['comment']); ?>."</p>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CLIENT -->

        <!-- START BLOG -->
        <section class="section bg-client" id="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2><span class="font-weight-bold">Blog</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2">I know a little bit but which  I know that want to share all of you.Here I will post about various technologies.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                                   <?php
       $query=mysqli_query($con,"select tblposts.id as postid,tblposts.PostImage,tblposts.PostTitle,tblposts.PostImage,tblposts.StartingPara,tblposts.quote,tblposts.EndingPara,tblposts.PostingDate,tblcategory.CategoryName as category,tblcategory.id as catid from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId  where tblposts.Is_Active=1 ORDER BY tblposts.id DESC LIMIT 3 ");
while($row=mysqli_fetch_array($query))
{
         ?>
                    <div class="col-lg-4 mt-3">
                        <div class="text-center rounded bg-white p-2">
                            <div class="img_blog">
                                <a href="single-post.php?pid=<?php echo htmlentities($row['postid']); ?>"><img src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" alt="" class="img-fluid rounded mx-auto d-block"></a>
                            </div>
                            <div class="content_blog pt-3 pb-3">
                                <div>
                                    <h5 class="font-weight-bold mb-0"><a href="single-post.php?pid=<?php echo htmlentities($row['postid']); ?>" class="text-dark"><?php echo htmlentities($row['PostTitle']); ?></a></h5>
                                </div>
                                <div class="mt-3">
                                    <p class="font-weight-bold h6 mb-3"><a href="categorized-post.php?id=<?php echo htmlentities($row['catid']); ?>" class="text-custom"><?php echo htmlentities($row['category']); ?></a></p>
                                    <p class="h6 text-muted date_blog mb-0"><?php $date = $row["PostingDate"]; echo date('F j, Y', strtotime($date));  ?> </p>
                                    <p class="mt-3 desc_blog pl-2 pr-2 text-muted"><?php  $pt=$row['StartingPara']; echo  (substr($pt,0));?></p>
                                    <p class="h6 mb-0"><a href="single-post.php?pid=<?php echo htmlentities($row['postid']); ?>" class="text-muted font-weight-bold">Read More...</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
        <!-- END BLOG -->

        
        
 <?php
        $query=mysqli_query($con,"Select *from  tblcontact");
        while($row=mysqli_fetch_array($query))
        {                                       
?>        
        <!-- CONTACT FORM START-->
        <section class="section " id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2>Get In <span class="font-weight-bold">Tuch</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2"></p>
                        </div>
                    </div>
                </div>  
                <div class="row mt-4 pt-4">
                    <div class="col-lg-4">
                        <div class="text-center mt-4">
                            <div>
                                <i class="mbri-mobile2 text-custom h2"></i>
                            </div>
                            <div class="mt-2">
                                <p class="mb-0 font-weight-bold">Call Me On</p>
                                <p class="text-muted"><?php echo htmlentities($row['mobile']); ?></p>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <div>
                                <i class="mbri-letter text-custom h2"></i>
                            </div>
                            <div class="mt-2">
                                <p class="mb-0 font-weight-bold">Email Me At</p>
                                <p class="text-muted"><?php echo htmlentities($row['email']); ?></p>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <div>
                                <i class="mbri-pin text-custom h2"></i>
                            </div>
                            <div class="mt-2">
                                <p class="mb-0 font-weight-bold">Address</p>
                                <p class="text-muted"><?php echo htmlentities($row['address']); ?></p>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <ul class="list-inline fot_social mb-0">
                                <li class="list-inline-item"><a href="<?php echo htmlentities($row['facebook']); ?>" class="social-icon text-muted"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo htmlentities($row['twitter']); ?>" class="social-icon text-muted"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo htmlentities($row['linkedIn']); ?>" class="social-icon text-muted"><i class="mdi mdi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo htmlentities($row['instragram']); ?>" class="social-icon text-muted"><i class="mdi mdi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo htmlentities($row['github']); ?>" class="social-icon text-muted"><i class="mdi mdi-github-circle"></i></a></li>                               
                            </ul>
                        </div>
                    </div>
                    
 <?php } ?>                   
                    <div class="col-lg-8">
                        <div class="contact_form">
                            <form method="post" action="#contact">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="name" class="font-weight-bold">Name</label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Your name..." required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="email" class="font-weight-bold">Email address</label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email..."  required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <label for="subject" class="font-weight-bold">Subject</label>
                                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject.."  required=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <label for="message" class="font-weight-bold">Message</label>
                                            <textarea name="message" id="comments" rows="4" class="form-control" placeholder="Your message..." required=""></textarea>
                                        </div>
                                    </div>
                                </div>                               
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!---Success Message--->                                                                                                               <?php if($msg){ ?>
                                        <div class="alert alert-success" role="alert">
                                        <strong>Well done!</strong> <?php echo htmlentities($msg);?>
                                        </div>
                                        <?php } ?>                                       
                                    </div>
                                    <div class="col-sm-6 text-right">

                                        <input type="submit" name="submit" class="btn btn-custom" value="Send Message">
                                    </div>
                                </div>
                            </form>                          
                        </div> 
                    </div>
                </div>                          
            </div>
        </section> 
        <!-- CONTACT FORM END-->
        
        <?php include 'footer.php'; ?>
        <script>
            $(".element").each(function() {
                var $this = $(this);
                $this.typed({
                    strings: $this.attr('data-elements').split(','),
                    typeSpeed: 100,
                    backDelay: 3000
                });
            });
            $(".youtube-bg").mb_YTPlayer();
        </script>
    </body>

<!-- Mirrored from themesboss.com/elvish/index_18.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 12:10:38 GMT -->
</html>