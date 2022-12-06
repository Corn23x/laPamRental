<?php
include('../controllers/product_controller.php');
include(dirname(__DIR__, 1) . '/settings/core.php');


?>



<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">

    <style>
        .category{
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
          <li class="active">
            <a href="category.php"><span class="fa fa-book mr-3"></span> Categories</a>
          </li>
          <li>
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
      <h2 class="category mb-4" style="color:black; text-align:left; font-size:40px">Category</h2>
               <div class="table-wrapper">
        <table class="fl-table">
            <Thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                </tr>
            </Thead>
            <Tbody>
            <?php
            $id= $_GET['id'];
                $all_cat = selectCat_ctr($id);
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
                    </tr>
            <?php
                    }
            ?>
            </Tbody>
        </table>
        </div>

        <p>Enter new name:</p>
        <form action="../actions/updatecategory.php" method="post">
    <input name="updatecat" type="text" required>
    <input name="submit" type="submit" > 
  <?php echo "<input type='hidden' name='id' value= $_GET[id]> "?>

    </form>
        
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