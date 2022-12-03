<?php
 include_once(dirname(__DIR__,1). '/functions/common_function.php');
  include_once(dirname(__DIR__,1). '/controllers/cart_controller.php');
  include_once(dirname(__DIR__,1). '/controllers/product_controller.php');
  include_once(dirname(__DIR__,1). '/settings/core.php');


getLinks();
?>


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title></title>

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
  



  
  
</head>

<style>
.qty{
  width: 60px;
  height: 30px;
  text-align: center;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.title{
   text-decoration: solid;
  
}

input[type=submit]{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 5px 10px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
  
}

footer{
            position: absolute;
            bottom: 0;
            width: 100%;
            margin-top: auto;

        }

</style>

<body>
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
				                    <input type="text" class="form-control" placeholder="Search">
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
				                        <a href="view/cart.php" >
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
				                    <li class=""><a href="aboutus.php">About us</a></li>
				                    <li class=""><a href="../Login/register.php">Register</a></li>

									<?php   
									if(isset($_SESSION['id'])){
										echo "<li><a href='../Login/logout.php'>Logout</a></li>";
										
									}else{
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

    <section id="populer-products" class="populer-products">

<div class="title section-header">
			<strong><h2>Cart Page</h2>	</strong>
				</div>



<br><br>

<table class="table table-border table-warning">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Proudct title</th>
      <th scope="col"></th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    
<?php
$customerid= $_SESSION['id'];
$cart = select_all_cartctr($customerid);

$cart_total = 0;
$cart_total_qty = 0;

foreach($cart as $cart_item){
  $productid= $cart_item['p_id']; 
  $quantity= $cart_item['qty'];
  $cart_total_qty += $cart_item['qty'];

  $product = Oneprod($productid);
  $product_img= $product['product_image'];
  $product_title= $product['product_title'];
  $product_price = $product['product_price'];

  $cart_total += $quantity * $product_price;

?>
      
 
    <tr>
      <th scope="row"><img src="../images/<?=$product['product_image'] ?>" alt="" style="max-width: 200px; max-height:200px;" class="mb-5"></th>
      <td colspan="2"><?=$product['product_title'] ?></td>
      <td><?=$product['product_price'] ?></td>
      <form action="../actions/manage_quantity_cart.php">
      <td><input type="number" min="0" class="qty" name="updatequant" placeholder=<?=$cart_item['qty'] ?>><input type="submit" value="Update" class="small btn btn-primary"></td></a>
      <input type="hidden" name="id" value=<?=$cart_item['p_id'] ?> class="form-control">
      </form>
      <td><a href="../actions/remove_from_cart.php?id=<?=$cart_item['p_id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></td></a>
    </tr>
   

  

<?php
}
?>

<tr>
  <th scope="row">
    <td></td>
    <td colespan="2">Total Price: </td>
    <td>GHS <?=$cart_total ?></td>
  </th>
</tr>

</tbody>
</table>

<a href="../index.php"><button class="btn btn-secondary text-light px-2 mx-2">Continue Shopping</button></a>
 <a href="#"><button class="btn btn-primary text-light">Checkout</button></a>

  
    </section>
 
  <!-- end nav section -->


  <!-- contact section -->
  


<br><br>

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


    <script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>



		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
</body>

</html>