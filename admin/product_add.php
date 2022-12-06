<?php
include_once(dirname(__DIR__,1). '/controllers/product_controller.php');
include_once(dirname(__DIR__,1). '/controllers/cart_controller.php');
include_once(dirname(__DIR__,1). '/controllers/customer_controller.php');
include_once(dirname(__DIR__, 1) . '/settings/core.php');

?>



<!doctype html>
<html lang="en">
  <head>
  	<title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">

   

    
    <style>
        .order{
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
            
        }

        .form{
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>

  </head>
  
  <body>
  <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/logo.jpg);"></div>
                      <h3>Apaalse Pamela</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="admin.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li >
              <a href="brand.php"><span class="fa fa-list mr-3"></span> Brands</a>
          </li>
          <li >
            <a href="category.php"><span class="fa fa-book mr-3"></span> Categories</a>
          </li>
          <li >
            <a href="orders.php"><span class="fa fa-credit-card mr-3"></span> Orders</a>
          </li>
          <li class="active">
            <a href="products.php"><span class="fa fa-product-hunt mr-3"></span> Products</a>
          </li>
          <li>
            <a href="../Login/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>
        <div id="content" class="p-4 p-md-5 pt-5">

  <div class="container mt-3">
    <h1 class="text-center">Insert Products</h1>

    <!-- Form (Anything aside text in the form would require the 'enctype') -->
    <form action="../actions/add_product.php" method="post" enctype="multipart/form-data">
    <!-- Title -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_title" class="form-label">Product Title</label>
      <input type="text" name="product_title" id="product_title" class="form-control border bg-dark text-light" placeholder="Enter Product Title" autocomplete="off" required="required">

    </div>
    <!-- description -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="description" class="form-label">Product Description</label>
      <input type="text" name="description" id="description" class="form-control border bg-dark text-light" placeholder="Enter Product Description" autocomplete="off" required="required">

    </div>
<!-- keywords -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="keywords" class="form-label">Product Keywords</label>
      <input type="text" name="keywords" id="keywords" class="form-control border bg-dark text-light" placeholder="Enter Product keywords" autocomplete="off" required="required">

    </div>
    <br>

    <!-- categories -->
<div class="form-outline mb-4 w-50 m-auto">
  <select name="product_categories" id="" class="form-select border bg-dark text-light">
  <option value="">Select a Category</option>  
<?php
$cat = cat_select();
foreach($cat as $all){
    echo "<option value='{$all['cat_id']}'>{$all['cat_name']}</option>";

}


?>

  </select>

</div>
<!-- Brands -->
<div class="form-outline mb-4 w-50 m-auto">
  <select name="product_brands" id="" class="form-select border bg-dark text-light">
  <option value="">Select a Brands</option>  
  <?php
   $brand = brand_select();
   foreach($brand as $all){
       echo "<option value='{$all['brand_id']}'>{$all['brand_name']}</option>";
   
   }
            ?>
  </select>
  <!-- Image 1 -->
  <div class="form-outline mb-4 w-50 m-1">
      <label for="product_image1" class="form-label">Product Image 1</label>
      <input type="file" name="product_image1" id="product_image1" 
      class="form-control" required="required">

    </div>
<!-- Price -->
    <div class="form-outline">
      <label for="product_price" class="form-label">Product Price</label>
      <input type="text" name="product_price" id="product_price" class="form-control border bg-dark text-light" placeholder="Enter Product price" autocomplete="off" required="required">

    </div>
    <!-- Price -->
    <div class="form-outline mb-7 mt-3 w-50 m-1">
      <input type="submit" name="insert_product"  class="btn btn-info" value="Insert products">

    </div>
    </form>
  </div>
  
  </div>
  
  </body>
  
</body>
</html>



