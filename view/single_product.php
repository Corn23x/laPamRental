<?php
include_once(dirname(__DIR__,1). '/settings/core.php');
include_once(dirname(__DIR__,1). '/controllers/product_controller.php');
include_once(dirname(__DIR__,1). '/controllers/cart_controller.php');
include_once(dirname(__DIR__,1). '/functions/common_function.php');



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
        <title>LaPamRental-Single Product View</title>

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
.container {
  width: 100%;
}

h5 {
  padding:0;
  margin:0;
}

.single-product {
    width: 80%;
    margin: auto;
    display: grid;
    grid-template-columns: 50% 1fr;
    grid-gap: 20px;
  }

.product-images {
    grid-column: 1 / span 1;
    width: 100%;
    display: grid;
    grid-template-rows: 80% 20%;
}
.product-image-display {
    grid-row: 1 / span 1;
    width: 100%;
}



.product-image-display img {
  width: 100%;
}

.main-product-images {
  width: 100%;  
}


.productImage2{
  display: none;
}

.productImage3{
  display: none;
}

.productImage4{
  display: none;
}

.product-thumbnails-gallery {
    grid-row: 2 / span 1;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 10px
}

.product-thumbnail {
  max-width: 100%;
}

.product-thumbnail img {
  width: 100%;
}

.product-text {
    grid-column: 2 / span 1;
    width: 100%;
}

@media screen and (max-width: 1100px) {
	.single-product {
		margin: none;
		grid-template-columns: none;
		grid-template-rows: 1fr auto; 
	}
	
	.product-images {
		grid-column: none;
		grid-row: 1 / span 1;
	}
	
	.product-text {
		grid-column: none;
		grid-row: 2 / span 1;
	}
}

		footer{
            position: absolute;
            bottom: 0;
            width: 100%;
            margin-top: auto;

        }

        .button1{
            margin-left: 10px;
            margin-right: 10px;
            background-color: #1fd655;
           
            
        }

		</style>

        <script>
            // Array of Main product image classes *used to change css*
const mainProductImages = ['.productImage1', '.productImage2', '.productImage3', '.productImage4']; 

jQuery(document).ready(function() {
// On click event for all thumnail images
  jQuery(".product-thumbnail").click(function($){

    // Get data attribute from clicked thumbnail image
    const selectedImage = jQuery(this).data("image");

    // Making a new array of NOT selected thumnail data attributes
    var hiddenImages = jQuery.grep(mainProductImages, function( a ) {
    return a !== "."+selectedImage;
    });

    // Changing css of NOT selected images
    jQuery.each( hiddenImages, function( i, val ) {
      jQuery(val).css('display','none');
    });

    // Changing css of SELECTED image
    jQuery("."+selectedImage).css( "display", "grid" );

    // Changing color displayed in the subtitle to the SELECTED image
    jQuery(".selectedProductColor").text(jQuery(this).data("color"));

  });
});  
        </script>
        
     
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
                               <span class="badge badge-bg-1"><?=countCartCtr($_SESSION['id']); ?></span>
                           </a>
                       </li><!--/.dropdown-->

               <?php
                       }
               ?>

                    </ul>
               </div><!--/.attr-nav-->
               <!-- End Atribute Navigation -->
           </div>




               <!-- Start Header Navigation -->
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                       <i class="fa fa-bars"></i>
                   </button>
                   <a class="navbar-brand" href="../index.php">LaPamRental</a>

               </div><!--/.navbar-header-->
               <!-- End Header Navigation -->

               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                   <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                       <li class=""><a href="../index.php">home</a></li>
                       <li class=""><a href="../index.php">products</a></li>
                       <li class=""><a href="aboutus.php">About us</a></li>
                      

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

<br><br><br><br><br>


<container>
<section class='single-product'>

<?php
if(isset($_GET['id'])){

    $product_id= $_GET['id'];
    
    $result= Oneprod($product_id);
    
    //var_dump($result);
    
    // foreach($result as $results){

echo ' 
    <div class="product-images">
      <div class="main-product-images">
        <div class="product-image-display productImage1">
            <img src="../images/'.$result['product_image'].'" alt="" style="max-width: 400px; max-height:400px; ">
        </div>
      
        
        
      </div>
      
      
      
    </div>


    <div class="product-text">
        <h1 class="product-title">
          '.$result['product_title'].'
        </h1>
        <h4 class="product-subtitle">
        Price: GHS <span class="selectedProductColor">'.$result['product_price'].'</span>
        </h4>
      <hr>
        <p class="product-description">
               Description:       </p>
        <p class="product-description">
        '.$result['product_desc'].' 
                </p>
<br>

<hr>
<a href="../actions/add_to_cart.php?add_to_cart='.$result['product_id'].'"><i class="fa fa-cart-plus" aria-hidden="true">Add to Cart</i></a><br><br>
<a href="../index.php"><i class="fa fa-arrow-left"></i>Continue shopping</i></a>

    </div>
';
}
    ?>

</section>
</container>







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