 <?php
        $query=mysqli_query($con,"Select *from  tblcontact");
        while($row=mysqli_fetch_array($query))
        {                                       
?> 
<!-- Start Footer -->
        <section class="bg-white">
            <div class="container">
                <div class="row pt-4 pb-4">
                    <div class="col-lg-12">
                        <div class="float-left float_none mt-2 mb-2">
                            <p class="copy-rights text-muted mb-0">@2018 All rights reserved. Design by <a href="<?php echo htmlentities($row['developer']); ?>"><?php echo htmlentities($row['name']); ?>.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Footer -->
 <?php } ?> 
        <!-- BACK TO TOP -->    
        <a href="#" class="back_top"> <i class="mbri-arrow-up"> </i> </a>

        
        <script>

                jQuery(document).ready(function () {

                    $('.summernote').summernote({
                        height: 240, // set editor height
                        minHeight: null, // set minimum height of editor
                        maxHeight: null, // set maximum height of editor
                        focus: false                 // set focus to editable area after initializing summernote
                    });
                    
                    
                });
            </script>
     

            <!--Summernote js-->
            <script src="plugins/summernote/summernote.min.js"></script>
        
        <!-- JAVASCRIPTS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!--EASING JS-->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <!-- TYPED -->
        <script src="js/typed.js"></script>         
        <!-- MFP JS -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!--PORTFOLIO FILTER JS-->
        <script src="js/isotope.js"></script>     
        <!-- OWL CAROUSEL -->
        <script src="js/owl.carousel.min.js"></script>
        <!--CUSTOM JS-->
        <script src="js/custom.js"></script>
        <script>

                jQuery(document).ready(function () {

                    $('.summernote').summernote({
                        height: 240, // set editor height
                        minHeight: null, // set minimum height of editor
                        maxHeight: null, // set maximum height of editor
                        focus: false                 // set focus to editable area after initializing summernote
                    });
                    
                    
                });
            </script>
     

            <!--Summernote js-->
            <script src="plugins/summernote/summernote.min.js"></script>
            