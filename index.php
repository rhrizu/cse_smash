<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>EWU_Smash</title>
        <meta name="description" content="this is a web page of EWU cse SMASH'18 which is going to held in ewu campus.">
        <meta name="EWU" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <link rel="stylesheet" href="assets/css/slick/slick.css"> 
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
       
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
       
        <link rel="stylesheet" href="assets/css/bootsnav.css">

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
       
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->

            <nav class="navbar navbar-default bootsnav navbar-fixed">

                <div class="container"> 

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        
                        <h3 class="navbar-header" style="margin-top: 6%"> EWU CSE Tounament</h3>
                        <div  style="position: absolute; right: 0px; margin-top: 1%">
                        <form method="post" action="ViewAllTeam.php">
                        	
                        		<input type="text" name="Uname" placeholder="Name" style="border-style: groove;">
                   			                  		
                        		<input type="text" name="pass" placeholder="Password" style="border-style: groove;">
                    		                    		
                        		<button type="submit" class="btnLogin">LogIn</button>
                    	
                        </form>
						</div>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                </div> 

            </nav>

            <!--Home Sections-->
            <!--Business Section-->
            <section id="business" class="business bg-grey roomy-70">
                <div class="container">
                    <div class="row">
                        <div class="main_business">
                            <div class="col-md-7">
                                <div class="business_slid">
                                    <div class="slid_shap bg-grey"></div>
                                    <div class="business_items text-center">
                                        
									<?php
                                        	for($i=1;$i<21;$i++){
                                        	echo "<div class='business_item'>
                                            <div class='business_img'>
                                                <img src='assets/images/".$i.".JPG' alt='' />
                                            </div>
                                        </div>";
                                        }

                                        ?>    
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-5">
                                <div class="business_item sm-m-top-50">
                                    <h2 class="text-uppercase"><strong>EWU CSE SMASH'18</strong></h2>
                                    <h3 class="text-uppercase"><strong>23rd & 24th February</strong></h3>
                                    <h5><strong>Vanue: EWU UnderGround</strong></h5>

                                    <ul>
                                        <li><i class="fa fa-arrow-circle-right"></i> Faculty Single</li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> Boys Double</li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> Mix Double</li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> Boys Single</li>
                                    </ul>
                                    <p style="margin-top: 20px"><b>Entry Fee: </b></p>
                                    <p style="margin-left: 14%; margin-bottom: 2%">Single: 200 </p>
                                    <p style="margin-left: 14%"> Double: 400</p>

                                    <div class="business_btn">
                                        <a href="ViewAllTeam.php" class="btn btn-default m-top-20">View All Team</a>
                                        <a href="reg.html" class="btn btn-primary m-top-20">Register</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off Business section -->
        </div>

        <!-- JS includes -->

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/css/slick/slick.js"></script>
        <script src="assets/css/slick/slick.min.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>