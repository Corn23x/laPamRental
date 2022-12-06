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



        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
      <h2 class="order mb-4" style="color:black; text-align:left; font-size:40px">Products</h2>
        <h5>Current product being editted:</h5>
        <p></p>
        <div class="table-wrapper">
        <table class="fl-table">
            <Thead>
                <tr>
                    <th>
                        Product ID
                    </th>
                    <th>
                        Product Image
                    </th>
                    <th>
                     Category
                    </th>
                    <th>
                        Brand
                    </th> 
                    <th>
                     Name
                    </th> 
                    <th>
                      Price
                    </th> 
                    <th>
                      Product Description
                    </th> 
                    <th>
                      Product keywords
                    </th> 
                   
                    
                </tr>
            </Thead>
            <Tbody>
            <?php
            if(isset($_GET['id'])){

              $id= $_GET['id'];

               
              $prod= Oneprod($id);

             //   var_dump($prod);
             
              
                   $cat= $prod['product_cat'];
                   $brand=$prod['product_brand'];

                   $brand=selectOneBrand_ctr($brand);
                   $category=selectOneCat_ctr( $cat);

                  // var_dump($brand);
                     
                     
                    // var_dump($customer);
            ?>
                     <tr>
                     <td>
                            <?=$prod['product_id'] ?>
                        </td>
                         <td>
                        <img src="../images/<?= $prod['product_image'] ?>" alt="" style="max-width: 150px; max-height: 150px; ">    
                        </td>
                      
                        <td>
                           <?=$category['cat_name'] ?>
                        </td>  
                        <td>
                              <?=$brand['brand_name'] ?>                        
                          </td>  
                        <td>
                               <?=$prod['product_title']?> 
                        </td>  
                        <td>
                            <?=$prod['product_price'] ?>
                        </td>  
                        <td>
                            <?=$prod['product_desc'] ?>
                        </td>  
                        <td>
                            <?=$prod['product_keywords'] ?>
                        </td>  
                        
                    </tr>
            <?php
                    } 
            ?>
            </Tbody>
        </table>
        </div>
        <br>

<div class="form">
         <!-- Form (Anything aside text in the form would require the 'enctype') -->
    <form action="../actions/updateprod.php" method="post" enctype="multipart/form-data">
    <!-- Title -->
    <?php echo "<input type='hidden' name='id' value= $_GET[id] class='form-control'>" ?>
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_title" class="form-label">Product Name</label>
      <input type="text" name="product_title" id="product_title" class="form-control border" placeholder="Enter Product Title" autocomplete="off" required="required">

    </div>
    <!-- description -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="description" class="form-label">Product Description</label>
      <input type="text" name="description" id="description" class="form-control border" placeholder="Enter Product Description" autocomplete="off" required="required">

    </div>
<!-- keywords -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="keywords" class="form-label">Product Keywords</label>
      <input type="text" name="keywords" id="keywords" class="form-control border" placeholder="Enter Product keywords" autocomplete="off" required="required">

    </div>
    <br>

    <!-- categories -->
<div class="form-outline mb-4 w-50 m-auto">
  <select name="product_categories" id="" class="form-select ">
  <option value="">Select a Category</option>  
<?php
$cat = cat_select();
foreach($cat as $all){
    echo "<option value='{$all['cat_id']}'>{$all['cat_name']}</option>";

}


?>

  </select>
  <br>

</div>
<!-- Brands -->
<div class="form-outline mb-4 w-50 m-auto">
  <select name="product_brands" id="" class="form-select">
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
      <label for="product_image1" class="form-label">Product Image</label>
      <input type="file" name="product_image1" id="product_image1" 
      class="form-control" required="required">

    </div>
<!-- Price -->
    <div class="form-outline">
      <label for="product_price" class="form-label">Product Price</label>
      <input type="text" name="product_price" id="product_price" class="form-control border" placeholder="Enter Product price" autocomplete="off" required="required">

    </div>
    <!-- Price -->
    <div class="form-outline mb-7 mt-3 w-50 m-1">
      <input type="submit" name="edit_product"  class="btn btn-info mb-3" value="Edit products"><br>
    <a href="products.php" class="btn btn-secondary">Return</a>
    </div>
    </form>
    </div>

      </div>


      

    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</body>
</html>



<?php

?>