<?php
include_once('functions/common_function.php');
include_once('settings/core.php');
include_once('controllers/product_controller.php');
include_once('controllers/cart_controller.php');



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
        <title>LaPamRental</title>

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
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">

		<style>
			.img{
				width: 100%;
				height: 100%;
				position: auto;
				
			}

			.image {
				opacity: 1;
				display: block;
				width: 100%;
				height: auto;
				transition: .5s ease;
				backface-visibility: hidden;
}

.middle {
		transition: .5s ease;
		opacity: 0;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #FFEA61;
  color: black;
  font-size: 16px;
  padding: 16px 32px;
}
		</style>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		
	
		<!--welcome-hero start -->
		<header id="home" class="welcome-hero">

			<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
				<!--/.carousel-indicator -->
				 <ol class="carousel-indicators">
					<li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
					<li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
					<li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
				</ol><!-- /ol-->
				<!--/.carousel-indicator -->

				<!--/.carousel-inner -->
				<div class="carousel-inner" role="listbox">
					<!-- .item -->
					<div class="item active">
						<div class="single-slide-item slide1">
							<div class="container">
								<div class="welcome-hero-content">
									<div class="row">
										<div class="col-sm-7">
											<div class="single-welcome-hero">
												<div class="welcome-hero-txt">
													<h4>Chair collection</h4>
													<h2>best outdoor chairs</h2>
													<p>
													Explore a wide variety of chairs for all outdoor events of the best quality! 
													</p>

													<button class="btn-cart welcome-add-cart" onclick="window.location.href='#new-arrivals'">
														<span class="lnr lnr-plus-circle"></span>
														Explore <span></span> Products
													</button>
													
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
										<div class="col-sm-5">
											<div class="single-welcome-hero">
												<div class="welcome-hero-img">
													<img src="assets/images/slider/slider1.png" alt="slider image">
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
									</div><!--/.row-->
								</div><!--/.welcome-hero-content-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->

					</div><!-- /.item .active-->

					

					<div class="item">
						<div class="single-slide-item slide2">
							<div class="container">
								<div class="welcome-hero-content">
									<div class="row">
										<div class="col-sm-7">
											<div class="single-welcome-hero">
												<div class="welcome-hero-txt">
													<h4>Durable Tents!</h4>
													<h2>Variety of Cheesetents, Funeral tents and more!</h2>
													<p>
															Affordable and duarable tents for sale at affordable prices!
													</p>
													
													<button class="btn-cart welcome-add-cart" onclick="window.location.href='#new-arrivals'">
														<span class="lnr lnr-plus-circle"></span>
														Explore <span></span> Tents
													</button>
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
										<div class="col-sm-5">
											<div class="single-welcome-hero">
												<div class="welcome-hero-img">
													<img src="assets/images/slider/slider2.png" alt="slider image">
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
									</div><!--/.row-->
								</div><!--/.welcome-hero-content-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->

					</div><!-- /.item .active-->

					<div class="item">
						<div class="single-slide-item slide3">
							<div class="container">
								<div class="welcome-hero-content">
									<div class="row">
										<div class="col-sm-7">
											<div class="single-welcome-hero">
												<div class="welcome-hero-txt">
													<h4>Table collection</h4>
													<h2>Long tables</h2>
													<p>
														Up to 8 seater tables available! 
													</p>
													
													<button class="btn-cart welcome-add-cart" onclick="window.location.href='#new-arrivals'">
														<span class="lnr lnr-plus-circle"></span>
														Explore <span></span> Tables
													</button>
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
										<div class="col-sm-5">
											<div class="single-welcome-hero">
												<div class="welcome-hero-img">
													<img src="assets/images/slider/slider3.png" alt="slider image">
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
									</div><!--/.row-->
								</div><!--/.welcome-hero-content-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->
						
					</div><!-- /.item .active-->
				</div><!-- /.carousel-inner-->

			</div><!--/#header-carousel-->



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

									<form action="view/product_search_result.php" role="search" method="get">
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
				                        <a href="view/cart.php" class="dropdown-toggle" data-toggle="dropdown" >
				                            <span class="lnr lnr-cart"></span>
											<span class="badge badge-bg-1"><?=countCartCtr($_SESSION['id']); ?></span>
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
				                <a class="navbar-brand" href="index.php">LaPamRental</a>

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
				                    <li class=" scroll active"><a href="#home">home</a></li>
				                    <li class="scroll"><a href="#new-arrivals">products</a></li>
				                    <li class=""><a href="view/aboutus.php">About us</a></li>
				                   

									<?php   
									if(isset($_SESSION['id'])){
										echo "<li><a href='view/order_history.php'>Order History</a></li>";
										echo "<li><a href='Login/logout.php'>Logout</a></li>";
										
									}else{
										echo '<li class=""><a href="Login/register.php">Register</a></li>';
										echo "<li><a href='Login/login.php'>Login</a></li>";
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
			<div class="container">
				<div class="populer-products-content">
					<div class="row">
						<div class="col-md-18">
							<div class="single-populer-products">
								<div class="single-inner-populer-products">
									<div class="row">
										<div class="col-md-4 col-sm-12">
											<div class="single-inner-populer-product-img">
												<img src="images/sale1.png" alt="populer-products images">
											</div>
										</div>

										<div class="col-md-8 col-sm-12">
											<div class="single-inner-populer-product-txt">
												<h2>
													<a>
														Best <span>Deals!</span>
													</a>
												</h2>
												<p>
													Best price for product on our website NOW!
												</p>
												<div class="populer-products-price">
													<h4>Sales Start from GHS<span> 200.00</span></h4>
												</div>
												<button class="btn-cart welcome-add-cart populer-products-btn" onclick="window.location.href='#new-arrivals'">
													discover more
												</button>
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







					

		<!--Products start -->
		<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>Products</h2>
					
				</div><!--/.section-header-->


				<!-- Filter -->
				<form action="" method="">
				<select name="category" id="">
					<option value="">Categories</option>
					<?php
				$cat = cat_select();
				foreach($cat as $all):
					echo "<option value='{$all['cat_id']}'>{$all['cat_name']}</option>";

				endforeach;

					?>

				</select>
				<button class="btn btn-warning">Go</button>
				</form> <br>

				<form action="" method="">
				<select name="brand" id="">
					<option value="">Brands</option>
					
					<?php
					$brand = brand_select();
   foreach($brand as $all){
       echo "<option value='{$all['brand_id']}'>{$all['brand_name']}</option>";
   
   }

   	
            ?>
				</select> 
				<button class="btn btn-warning">Go</button>
				</form>

				</div>

				<!-- End of filter -->

				<div class="new-arrivals-content">
					<div class="row">
<?php
if(!isset($_GET['brand'])){
	if(!isset($_GET['category'])){
		
	// $brand_id= $_GET['brand'];
	// $selectbrand= selectProdbrand($brand_id);
	
	// foreach($selectbrand as $brand){ }
	

$products= prod_select();

foreach($products as $product){


?>				

						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									
									<img src="images/<?=$product['product_image'] ?>" alt="new-arrivals images" style="max-width: 250px; ">
									
									<div class="single-new-arrival-bg-overlay"></div>
								
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="actions/add_to_cart.php?add_to_cart=<?=$product['product_id']?>">add <span>to </span> cart</a>
										</p>
										<p class="arrival-review pull-right">
										
											<a href="view/single_product.php?id=<?=$product['product_id']?>"><span class="lnr lnr-frame-expand"></span></a>
										</p>
									</div>
								</div>
								<h4><a href="#"><?=$product['product_title']?></a></h4>
								<p class="arrival-product-price">GHS <?=$product['product_price']?></p>
							</div>
						</div>
<?php
}
	}
}	
?>
						<!-- <div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="assets/images/collection/arrivals8.png" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="#">add <span>to </span> cart</a>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="#">wooden bed</a></h4>
								<p class="arrival-product-price">$140.00</p> -->
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.new-arrivals-->
		<!--new-arrivals end -->



		
		<!-- Brand Selection -->
		<section id="new-arrivals" class="new-arrivals">
		
		<div class="container">
		<div class="new-arrivals-content">
		<div class="row">
		

		<?php
		if(isset($_GET['brand'])){
			
				
			$brand_id= $_GET['brand'];
	
			$selectbrand= selectProdbrand($brand_id);
			$countbrand= countBrandctr($brand_id);

			// var_dump($countbrand);

			if($countbrand==0){
				echo "
				<div class='alert alert-danger'>
				<h1>There are no products under this brand. <a href='index.php'><u>Return to all products</u></a> </h1>
				</div>
				
				";

			}

			
				foreach($selectbrand as $brand){
					
						?>
					
						<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									
									<img src="images/<?=$brand['product_image'] ?>" alt="new-arrivals images" style="max-width: 250px; ">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="actions/add_to_cart.php?add_to_cart=<?=$brand['product_id']?>">add <span>to </span> cart</a>
										</p>
										<p class="arrival-review pull-right">
										
											<a href="view/single_product.php?id=<?=$brand['product_id']?>"><span class="lnr lnr-frame-expand"></span></a>
										</p>
									</div>
								</div>
								<h4><a href="#"><?=$brand['product_title']?></a></h4>
								<p class="arrival-product-price">GHS <?=$brand['product_price']?></p>
							</div>
				</div>


				
						<?php
					}
				}
		
				
		?>

						
						
					
		<!-- Brand Selection End -->




		<!-- Category Selection -->

		<?php
		if(isset($_GET['category'])){
			
				
			$category_id= $_GET['category'];
	
			$selectcat= selectProdcat($category_id);
			$countcat= countCartectr($category_id);

			// var_dump($countcat);

			if($countcat==0){
				echo "
				<div class='alert alert-danger'>
				<h1>There are no products in this category. <a href='index.php'><u>Return to all products</u></a> </h1>
				</div>
				
				";

			}

			
				foreach($selectcat as $cat){
					
						?>
					
						<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									
									<img src="images/<?=$cat['product_image'] ?>" alt="new-arrivals images" style="max-width: 250px; ">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="actions/add_to_cart.php?add_to_cart=<?=$cat['product_id']?>">add <span>to </span> cart</a>
										</p>
										<p class="arrival-review pull-right">
										
											<a href="view/single_product.php?id=<?=$cat['product_id']?>"><span class="lnr lnr-frame-expand"></span></a>
										</p>
									</div>
								</div>
								<h4><a href="#"><?=$cat['product_title']?></a></h4>
								<p class="arrival-product-price">GHS <?=$cat['product_price']?></p>
							</div>
				</div>


				
						<?php
					}
				}
		
				
		?>

						</div>
						</div>
					</div>
				</div>
			</div>
		
		</section>



		<!-- Category Selection End -->
		





		<!--End image start -->
		<section id="populer-products" class="populer-products">
			<div class="container">
				<div class="populer-products-content">
					<div class="row">
						<div class="col-md-18">
							<div class="single-populer-products">
								<div class="single-inner-populer-products">
									<div class="row">
									

										<div class="">
										<div class="single-inner-populer-product-img">
												<img src="images/banner.png" alt="populer-products images" class="image img-fluid">
												<div class="middle">
														<div class="text">
															<button onclick="window.location.href='view/aboutus.php'">About Us</button></div>
													</div>
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

		</section><!--/.feature-->
		<!--End image end -->





		<!--newsletter strat -->
		<section id="newsletter"  class="newsletter">
			<div class="container">
				<div class="hm-footer-details">
					<div class="row">
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>information</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<li><a href="view/aboutus.php">about us</a></li><!--/li-->
										<li><a href="view/aboutus.php">contact us</a></li><!--/li-->
										<li><a href="#new-arrivals">store</a></li><!--/li-->
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>my accounts</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<?php
										if(isset($_SESSION['id'])){
										echo '
										<li><a href="view/order_history.php">order history</a></li>
										<li><a href="view/cart.php">my cart</a></li>
										';
										}else{
											echo '
											<li><a href="Login/login.php">login</a></li>
											<li><a href="Login/register.php">register</a></li>
											';
										}
										?>
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->

						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>contact us</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<li><a >(+233) 55 811 4931</a></li><!--/li-->
										<li><a >(+233) 24 414 3416 </a></li><!--/li-->
										
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->

			</div><!--/.container-->

		</section><!--/newsletter-->	
		<!--newsletter end -->





		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					
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