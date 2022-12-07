<?php
include_once(dirname(__DIR__,1). '/controllers/product_controller.php');
include_once(dirname(__DIR__,1). '/controllers/cart_controller.php');
include_once(dirname(__DIR__,1). '/controllers/customer_controller.php');
include_once(dirname(__DIR__, 1) . '/settings/core.php');

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


  <?php
  if(isset($_GET['id'])){

    $id= $_GET['id'];
    $order = deleteOrder_ctr($id);

    if($order){
      header("Refresh:1; url=orders.php");
    }
    else{
      echo'
      <div class="alert alert-danger">
                      <h1>Order is in use! Cannot be deleted. </h1>
                      </div>
      ';

      header("Refresh:1; url=orders.php");
  }

}
  
  ?>
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
                      Invoice Number
                    </th>
                    <th>
                        Order Date
                    </th> 
                    <th>
                     Order Status
                    </th> 
                    <th>
                      Customer email
                    </th> 
                    
                </tr>
            </Thead>
            <Tbody>
            <?php
                $all_order = selectallOrder_ctr();

               // var_dump($all_order);
               
               

               

                foreach($all_order as $all)
                    {
                      $mail= $all['customer_id'];
                     $customer = select_email_ctr($mail);
                     
                    // var_dump($customer);
            ?>
                     <tr>
                         <td>
                            <?= $all['order_id'] ?>
                        </td>
                      
                        <td>
                            <?=$all['invoice_no'] ?>
                        </td>
                        <td>
                           <?=$all['order_date'] ?>
                        </td>  
                        <td>
                              <?=$all['order_status'] ?>                        
                          </td>  
                        <td>
                               <?=$customer?> 
                        </td>  
                        <td>
                            <a href="single_order.php?id=<?=$all['order_id'] ?>">View Products</a>
                        </td>  
                        <td>
                            <a href="?id=<?=$all['order_id'] ?>">Delete order</a>
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