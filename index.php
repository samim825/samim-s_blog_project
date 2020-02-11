<!DOCTYPE html>
<html lang="en">

<?php include 'head.php';  ?>

    <body>

        <!-- START LOADER -->
<!--        <div id="preloader">
            <div id="status">
                <div class="spinner">Loading...</div>
            </div>
        </div>-->
        <!-- END LOADER -->

        <!-- START NAVBAR -->
        <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo" href="index.html">
                        <img src="images/logo.png" alt="" class="img-fluid logo-light"> 
                        <img src="images/logo-dark.png" alt="" class="img-fluid logo-dark">
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
                            <a href="#services" class="nav-link">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a href="#education" class="nav-link">Education</a>
                        </li>
                        <li class="nav-item">
                            <a href="#work" class="nav-link">Work</a>
                        </li>
                        <li class="nav-item">
                            <a href="#client" class="nav-link">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a href="#blog" class="nav-link">Blog</a>
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
                                    <h4>Hello & Welcome</h4>
                                    <h1 class="header_title mb-0 mt-3">I Am <span class="element font-weight-bold" data-elements="Md. Samim Hossain.,A Web Developer."></span></h1>
                                    <ul class="social_home list-unstyled text-center pt-4">
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-dribbble"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-google-plus"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                    </ul>
                                    <div class="header_btn">
                                        <a href="#" class="btn btn-outline-custom btn-rounded mt-4">Download CV</a>
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
        <section class="section" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2><span class="font-weight-bold">About </span>Me</h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-12">
                        <div>
                            <img src="images/sign.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <div class="text-center about-detail mx-auto mt-5">
                            <h3 class="mb-3">Hello! <span class="font-weight-bold text-custom">I'M Md. Samim Hossain</span></h3>
                            <ul class="mb-0 list-inline text-center about-work">
                                <li class="list-inline-item mr-0 text-muted">UI/UX Designer</li>
                                <li class="list-inline-item mr-0 text-muted">Photographer</li>
                                <li class="list-inline-item mr-0 text-muted">Devloper</li>
                            </ul>
                            <p class="text-muted mt-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="progress-bars skill-custom">
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left">Development</div>
                                <div class="text-muted float-right">80%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left">WordPress</div>
                                <div class="text-muted float-right">59%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 59%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left">Photoshop</div>
                                <div class="text-muted float-right">88%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 88%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="progress-bars skill-custom">
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left">Html</div>
                                <div class="text-muted float-right">96%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 86%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left">Css</div>
                                <div class="text-muted float-right">70%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left">Asp.net</div>
                                <div class="text-muted float-right">58%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:58%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END ABOUT -->

        <!-- START SERVICES -->
        <section class="section bg-light" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2>Our <span class="font-weight-bold">Services</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-4">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <i class="mbri-database"></i>
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="font-weight-bold">Graphic Design</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <i class="mbri-website-theme"></i>
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="font-weight-bold">Unlimited Color</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <i class="mbri-growing-chart"></i>
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="font-weight-bold">Media Marketing</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <i class="mbri-wifi"></i>
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="font-weight-bold">Unlimited Wifi</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <i class="mbri-responsive"></i>
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="font-weight-bold">Responsive Design</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <i class="mbri-edit"></i>
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="font-weight-bold">Easy to customize</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SERVICES -->

        <!-- END FUNFACTS -->
        <section class="section bg-funfact">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row" id="counter">
                    <div class="col-lg-3">
                        <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                            <div class="lan_fun_icon mb-3">
                                <i class="mbri-timer h1"></i>
                            </div>
                            <h1 class="lan_fun_value mb-1" data-count="654">4</h1>
                            <p class="lan_fun_name mb-0">Working Hours</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                            <div class="lan_fun_icon mb-3">
                                <i class="mbri-gift h1"></i>
                            </div>
                            <h1 class="lan_fun_value mb-1" data-count="6400">10</h1>
                            <p class="lan_fun_name mb-0">Completed Projects</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                            <div class="lan_fun_icon mb-3">
                                <i class="mbri-user h1"></i>
                            </div>
                            <h1 class="lan_fun_value mb-1" data-count="2389">201</h1>
                            <p class="lan_fun_name mb-0">No. of Clients</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                            <div class="lan_fun_icon mb-3">
                                <i class="mbri-users h1"></i>
                            </div>                       
                            <h1 class="lan_fun_value mb-1" data-count="653">2</h1>
                            <p class="lan_fun_name mb-0">Team Member</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- START FUNFACTS -->

        <!-- START EXP. & EDU. -->
        <section class="section" id="education">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2><span class="font-weight-bold">Education & Experiance</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-5">
                        <div class="cv_edu_exp mt-3">
                            <div class="cv_edu_exp_box mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cv_edu_exp_year font-weight-bold text-custom position-relative">2010 - 2014</div>
                                        <div class="cb_edu_exp_detail">
                                            <h4>Studied at Cambridge University</h4>
                                            <p class="cv_desc mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cv_edu_exp_box mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cv_edu_exp_year font-weight-bold text-custom position-relative">2014 - 2016</div>
                                        <div class="cb_edu_exp_detail">
                                            <h4>Master In Computer Science</h4>
                                            <p class="cv_desc mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cv_edu_exp_box mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cv_edu_exp_year font-weight-bold text-custom position-relative">2016 - 2018</div>
                                        <div class="cb_edu_exp_detail">
                                            <h4>UI/UX Designer</h4>
                                            <p class="cv_desc mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2">
                        <div class="cv_edu_exp mt-3">
                            <div class="cv_edu_exp_box mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cv_edu_exp_year font-weight-bold text-custom position-relative">2010 - 2014</div>
                                        <div class="cb_edu_exp_detail">
                                            <h4>Senior Graphic Designer</h4>
                                            <p class="cv_desc mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cv_edu_exp_box mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cv_edu_exp_year font-weight-bold text-custom position-relative">2014 - 2016</div>
                                        <div class="cb_edu_exp_detail">
                                            <h4>Web Developer</h4>
                                            <p class="cv_desc mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cv_edu_exp_box mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cv_edu_exp_year font-weight-bold text-custom position-relative">2016 - 2018</div>
                                        <div class="cb_edu_exp_detail">
                                            <h4>Freelancer And Themeforest</h4>
                                            <p class="cv_desc mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </section>
        <!-- END EXP. & EDU. -->

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

        <!--START WORK -->   
        <section class="section text-center" id="work">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2>Our <span class="font-weight-bold">Work</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <ul class="text-center list-unstyled list-inline mb-0 text-capitlize work_menu" id="menu-filter">
                            <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
                            <li class="list-inline-item"><a class="" data-filter=".seo">Seo</a></li>
                            <li class="list-inline-item"><a class="" data-filter=".webdesign">Webdesign</a></li>
                            <li class="list-inline-item"><a class="" data-filter=".work">Work</a></li>
                            <li class="list-inline-item"><a class="" data-filter=".wordpress">Wordpress</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-5 work-filter">
                    <div class="col-lg-4 webdesign wordpress">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="images/works/1.jpg"></a>
                            <div class="work_images">
                                <img src="images/works/1.jpg" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4 class="mb-0">UI Elements, Icons</h4>
                                    <h6 class="mb-0">Studio &amp; Art</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 seo webdesign">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="images/works/2.jpg"></a>
                            <div class="work_images">
                                <img src="images/works/2.jpg" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>Illustrations</h4>
                                    <h6>Creative &amp; Art</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 work">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="images/works/3.jpg"></a>
                            <div class="work_images">
                                <img src="images/works/3.jpg" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>Media, Icons</h4>
                                    <h6>Open Imagination</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 seo webdesign">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="images/works/4.jpg"></a>
                            <div class="work_images">
                                <img src="images/works/4.jpg" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>Graphics, UI Elements</h4>
                                    <h6>Locked Steel Gate</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 seo work">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="images/works/5.jpg"></a>
                            <div class="work_images">
                                <img src="images/works/5.jpg" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>Illustrations, Graphics</h4>
                                    <h6>Mac Sunglasses</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wordpress">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="images/works/6.jpg"></a>
                            <div class="work_images">
                                <img src="images/works/6.jpg" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>UI Elements, Media</h4>
                                    <h6>Backpack Contents</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END WORK -->

        <!-- START CLIENT -->
        <section class="section bg-client" id="client">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto text-white section-main-title">
                            <h2>Our <span class="font-weight-bold">Client</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-12">
                        <div id="owl-demo" class="owl-carousel">
                            <div class="text-white people_says text-center">
                                <div class="people_icon">
                                    <i class="mbri-user"></i>                                
                                </div>
                                <div class="people_review_box mt-4">
                                    <p class="people_name text-white h5 font-weight-bold mb-0">Kirk McFall</p>
                                    <p class="h6">Google</p>
                                    <p class="people_review text-white mx-auto pt-3 mb-0">" The most well-known dummy text is the 'Lorem Ipsum', which is said originated the 16th century. This ancient dummy text is also  incomprehensible, of most European in Latin script."</p>
                                </div>
                            </div>
                            <div class="text-white people_says text-center">
                                <div class="people_icon">
                                    <i class="mbri-user"></i>                                
                                </div>
                                <div class="people_review_box mt-4">
                                    <p class="people_name text-white h5 font-weight-bold mb-0">Edward Evans</p>
                                    <p class="h6">Google</p>
                                    <p class="people_review text-white mx-auto pt-3 mb-0">" The most well-known dummy text is the 'Lorem Ipsum', which is said originated the 16th century. This ancient dummy text is also  incomprehensible, of most European in Latin script."</p>
                                </div>
                            </div>
                            <div class="text-white people_says text-center">
                                <div class="people_icon">
                                    <i class="mbri-user"></i>                                
                                </div>
                                <div class="people_review_box mt-4">
                                    <p class="people_name text-white h5 font-weight-bold mb-0">Antonio Hernandez</p>
                                    <p class="h6">Google</p>
                                    <p class="people_review text-white mx-auto pt-3 mb-0">" The most well-known dummy text is the 'Lorem Ipsum', which is said originated the 16th century. This ancient dummy text is also  incomprehensible, of most European in Latin script."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CLIENT -->

        <!-- START GREAT PEOPLE -->
        <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2>Trusted by <span class="font-weight-bold">Great People</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="images/clients/5.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="images/clients/6.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END GREAT PEOPLE -->

        <!-- START SUBCRIBE  -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2><span class="font-weight-bold">Subscribe</span> to Newsletter </h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-12">
                        <div class="text-center subcribe-newslatter mt-4">
                            <form class="mx-auto position-relative">
                                <input type="text" placeholder="Email">
                                <button type="submit" class="btn btn-custom">Subcribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SUBCRIBE -->

        <!-- START BLOG -->
        <section class="section bg-light" id="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2>Our <span class="font-weight-bold">Blog</span></h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <?php for($i=1;$i<=6;$i++){ ?>
                    <div class="col-lg-4 mt-3">
                        <div class="text-center rounded bg-white p-2">
                            <div class="img_blog">
                                <img src="images/blog/blog-1.jpg" alt="" class="img-fluid rounded mx-auto d-block">
                            </div>
                            <div class="content_blog pt-3 pb-3">
                                <div>
                                    <h5 class="font-weight-bold mb-0"><a href="all_posts.php" class="text-dark">There are many variations</a></h5>
                                </div>
                                <div class="mt-3">
                                    <p class="font-weight-bold h6 mb-3"><a href="#" class="text-custom">Lifestyle</a></p>
                                    <p class="h6 text-muted date_blog mb-0">13 February 2018 <a href="#" class="text-dark font-weight-bold">By Envato</a></p>
                                    <p class="mt-3 desc_blog pl-2 pr-2 text-muted">Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>
                                    <p class="h6 mb-0"><a href="all_posts.php" class="text-muted font-weight-bold">Read More...</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
        <!-- END BLOG -->

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
                            <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
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
                                <p class="mb-0 font-weight-bold">Call Us On</p>
                                <p class="text-muted">+985 123 7856</p>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <div>
                                <i class="mbri-letter text-custom h2"></i>
                            </div>
                            <div class="mt-2">
                                <p class="mb-0 font-weight-bold">Email Us At</p>
                                <p class="text-muted">exmaple@gmail.com</p>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <div>
                                <i class="mbri-pin text-custom h2"></i>
                            </div>
                            <div class="mt-2">
                                <p class="mb-0 font-weight-bold">Visit Office</p>
                                <p class="text-muted">202, Grasselli Street , Conway.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact_form">
                            <form>
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
                                            <input type="text" class="form-control" id="subject" placeholder="Your Subject.."  required=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <label for="comments" class="font-weight-bold">Message</label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..." required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <input type="submit" class="btn btn-custom" value="Send Message">
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