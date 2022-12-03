
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>


<?php
include_once(dirname(__DIR__, 1) . '/controllers/cart_controller.php');
include_once(dirname(__DIR__, 1) . '/settings/core.php');

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
        
        header("Refresh:1; url=../view/cart.php");
    } else {
        echo'
        <div class="alert alert-danger">
                        <h1>Product not Removed! </h1>
                        </div>
        ';
        
        header("Refresh:1; url=../view/cart.php");
    }

}


?>