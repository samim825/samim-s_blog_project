<?php
include('admin/includes/config.php');
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
                            <a href="index.php#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php#about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php#services" class="nav-link">Projects</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="index.php#experience" class="nav-link">Experience</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php#education" class="nav-link">Education</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php#skills" class="nav-link">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php#client" class="nav-link">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php#blog" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php#contact" class="nav-link">Contact</a>
                        </li>                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->

        <?php
$projectid=intval($_GET['projectid']);
$query=mysqli_query($con,"select * from tblprojects where id = '$projectid'");
while($row=mysqli_fetch_array($query))
{
?>
        
                <!-- START project -->
        <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">                       
                        <img src="admin/postimages/<?php echo htmlentities($row['image']);?>" alt="projects_image" width=100% height=400>                       
                        <br><br>
                        <h2 style="color: #007bff;"><?php echo htmlentities($row['projectName']);?></h2>
                        <h4>Built with : <?php echo htmlentities($row['builtWith']);?></h4>
                        <?php if(($row['liveLink'])!="#"){ ?>
                        <h4>See Live Demo  :<a href="<?php echo ($row['liveLink']);?>" ><?php echo htmlentities($row['projectName']);?></a></h4>
                        <?php } ?>
                        <div>
                            <p><?php  $pt=$row['description']; echo  (substr($pt,0));?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php }?> 
        <!-- END project -->

        

        
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