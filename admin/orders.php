<?php
include('../controllers/product_controller.php');
include(dirname(__DIR__, 1) . '/settings/core.php');
?>



<!doctype html>
<html lang="en">
  <head>
  	<title>Orders</title>
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
              <a href="brands.php"><span class="fa fa-list mr-3"></span> Brands</a>
          </li>
          <li >
            <a href="category.php"><span class="fa fa-book mr-3"></span> Categories</a>
          </li>
          <li class="active">
            <a href="orders.php"><span class="fa fa-credit-card mr-3"></span> Orders</a>
          </li>
          <li>
            <a href="products.php"><span class="fa fa-product-hunt mr-3"></span> Products</a>
          </li>
          <li>
            <a href="../Login/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>



        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
      <h2 class="order mb-4" style="color:black; text-align:left; font-size:40px">Orders</h2>
        <p>Welcome to the orders section</p>
        <p></p>
        <div class="table-wrapper">
        <table class="fl-table">
            <Thead>
                <tr>
                    <th>
                        Order ID
                    </th>
                    <th>
                        Customer Name
                    </th>
                    <th>
                       Invoice Number
                    </th>
                    <th>
                         Products
                    </th> 
                    <th>
                       Order date
                    </th> 
                </tr>
            </Thead>
            <Tbody>
            <?php
                $all_cat = cat_select();
                foreach($all_cat as $all)
                    {
            ?>
                     <tr>
                         <td>
                            <?= $all['cat_id'] ?>
                        </td>
                        <td>
                            <?= $all['cat_name'] ?>
                        </td>
                        <td>
                            <a href=<?="category_update.php?id=".$all['cat_id'] ?>>Edit</a>
                        </td>
                        <td>
                            <a href=<?="../actions/deletecat.php?id=".$all['cat_id'] ?>>Delete</a>
                        </td>  
                    </tr>
            <?php
                    }
            ?>
            </Tbody>
        </table>
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