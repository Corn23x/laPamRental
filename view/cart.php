<?php
 include_once(dirname(__DIR__,1). '/functions/common_function.php');
  include_once(dirname(__DIR__,1). '/controllers/cart_controller.php');
  include_once(dirname(__DIR__,1). '/controllers/product_controller.php');
  include_once(dirname(__DIR__,1). '/settings/core.php');
 include_once(dirname(__DIR__,1). '/controllers/customer_controller.php');


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

	       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->

  



  
  
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

<?php
if (isset($_GET['id'])) {

  $productid = $_GET['id'];
  $customerid= $_SESSION['id'];
  $result = delete_cart($productid, $customerid);

  if ($result) {
      echo'
      <div class="alert alert-success">
                      <h1>Product Removed! </h1>
                      </div>
      ';
      
      header("Refresh:1; url=cart.php");
  } else {
      echo'
      <div class="alert alert-danger">
                      <h1>Product not Removed! </h1>
                      </div>
      ';
      
      header("Refresh:1; url=cart.php");
  }

}



?>

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
      <td><input type="number" min="1" class="qty" name="updatequant" placeholder=<?=$cart_item['qty'] ?>><input type="submit" value="Update" class="small btn btn-primary"></td></a>
      <input type="hidden" name="id" value=<?=$cart_item['p_id'] ?> class="form-control">
	  <input type="hidden" name="totalquant" value=<?=$cart_total ?>>
      </form>
      <td><a href="?id=<?=$cart_item['p_id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></td></a>
    </tr>
   

  

<?php
}
?>

<tr>
  <th scope="row">
    <td></td>
    <td colespan="2">Total Price: </td>
    <td >GHS <span id="amount"><?=$cart_total ?></span></td>
  </th>
</tr>
<?php


?>
</tbody>
</table>

<a href="../index.php"><button class="btn btn-secondary text-light px-2 mx-2">Continue Shopping</button></a>
 <a onclick='payWithPaystack()'><button class="btn btn-primary text-light"  >Checkout</button></a>

  
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

		<?php
		if(isset($_SESSION['id'])){
  
  $customerid= $_SESSION['id'];
  $customer_email= select_email_ctr($customerid);
  echo "<input type='hidden' id='email-address' value='$customer_email'>";
//  $run= callcartproduct($customerid);
}
  ?>
  
    
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script src="https://js.paystack.co/v1/inline.js"></script> 

<script>
	console.log( document.getElementById("amount").innerHTML);

function payWithPaystack() {
  event.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_807a46b46c8c9c96fcc5c197e615c83856ee0f6a', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").innerHTML * 100,
    currency: "GHS",
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },

    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);

      $.get('../actions/process_payment.php?ref=',
      {ref: response.reference, total:document.getElementById('amount').innerHTML},
      
      function(data){
		alert(data);
        data=data.trim();
        console.log(data);

        if(data == "success"){
            window.location.href="payment_successful.php";
         } else{
            window.location.href="payment_failed.php";
         }

      }
        );
    }

  });

  handler.openIframe();
  }

    </script>

</body>

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

</html>