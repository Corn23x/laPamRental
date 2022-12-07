<?php
include_once(dirname(__DIR__,1). '/functions/common_function.php');
include_once(dirname(__DIR__,1). '/settings/core.php');
include_once(dirname(__DIR__,1). '/controllers/product_controller.php');
include_once(dirname(__DIR__,1). '/controllers/cart_controller.php');



?>






<!doctype html>
<html class="" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>About Us- LaPamRental</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->


		<style>
          .img{
				width: 100%;
				height: 100%;
				position: auto;
				
			}

			.footer{
            position: absolute;
            bottom: 0;
            width: 100%;

        }
			
        </style>



    </head>
	
	<body>
		
		
		

		<!--welcome-hero start -->
		<header id="home" class="welcome-hero">

			 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <!-- Start Top Search -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>

									<form action="product_search_result.php" role="search" method="get">
				                    <input type="search" class="form-control" name="search_data" placeholder="Search">
									<input type="hidden" value="Search"  class="btn btn-outline-dark" name="search_data_product" >
									</form>

				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                </div>
				            </div>
				        </div>
				        <!-- End Top Search -->

						<div class="container">            
				            <!-- Start Atribute Navigation -->
				            <div class="attr-nav">
				                <ul>
				                	<li class="search">
				                		<a href="#"><span class="lnr lnr-magnifier"></span></a>
				                	</li><!--/.search-->

									<?php 
									if(isset($_SESSION['id'])){
									?>
				                    <li class="dropdown">
				                        <a href="cart.php" >
				                            <span class="lnr lnr-cart"></span>
											<span class="badge badge-bg-1"><?=countcartCtr($_SESSION['id']); ?></span>
				                        </a>
										
									

				                    </li><!--/.dropdown-->
				                </ul>
				            </div><!--/.attr-nav-->
				            <!-- End Atribute Navigation -->

							<?php
									}
							?>
						</div>




				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="index.html">LaPamRental</a>

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
				                    <li class=""><a href="../index.php">home</a></li>
				                    <li class=""><a href="../index.php">products</a></li>
				                    <li class="active"><a href="aboutus.php">About us</a></li>
				                    

									<?php   
									if(isset($_SESSION['id'])){
										echo "<li><a href='order_history.php'>Order History</a></li>";
										echo "<li><a href='../Login/logout.php'>Logout</a></li>";
										
									}else{
										echo '<li class=""><a href="../Login/register.php">Register</a></li>';
										echo "<li><a href='../Login/login.php'>Login</a></li>";
									}
									?>

				                    <!-- <li class="scroll"><a href="#newsletter">contact</a></li> -->
				                </ul><!--/.nav -->
				            </div><!-- /.navbar-collapse -->
				        </div><!--/.container-->
				    </nav><!--/nav-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			    <div class="clearfix"></div>

			</div><!-- /.top-area-->
			<!-- top-area End -->

		</header><!--/.welcome-hero-->
		<!--welcome-hero end -->


             

		<!--populer-products start -->
		<section id="populer-products" class="populer-products">
			<div class="container text-center">
			<div class="section-header">
					<h2>About Us</h2>	
				</div>
				<br>
				<div class="populer-products-content">
					<div class="row">
						<div class="col-md-18">
							<div class="single-populer-products">
								<div class="single-inner-populer-products">
									<div class="row">
									
										<div class="">
                                            
											<!-- <div class="single-inner-populer-product-img">
												<img src="../images/aboutus.jpg" alt="populer-products images" class="image img-fluid">
											</div> -->
											<h2>WHO WE ARE</h2>
											<p> LaPamRental has a strong commitment to fulfill custoemrs orders and provide only the best quality of products for customers. </p>

										</div>
										
										<br><br><br>

										<h2>ABOUT OUR PRODUCTS</h2>
											<p> We offer high quality furniture made mostly for events such as celebrations,funerals and more. Our aim is to be able to provide users the best price to able
												to buy in large quantities or for customers to buy individual products.
											</p>

                                        </div>
  </div>
</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.populer-products-->
		<!--populer-products end-->

	

<br><br>



<span class="border border-dark">
	<img src="../images/infoicon.png" alt="Info icon">
	<h3>Contact Us Via Email:</h3>
			<a>capaalse@gmail.com</a>
		</span>
<br><br>

<div>
	<img src="../images/contacts-24.png" alt="Contacts">
	<h3>Contact Us Via Phone:</h3>
			<a>055 811 4931</a>
		</span>
</div>
	<!-- <center><button type="button" class="btn btn-primary" value="geng" data-bs-toggle="popover" data-bs-title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">geng</button></center> -->


	<br><br><br><br><br><br>





		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<div class="footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>	
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>	
					</div>
					<p>
						&copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->






		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>