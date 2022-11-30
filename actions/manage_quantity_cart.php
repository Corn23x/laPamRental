<?php
include_once(dirname(__DIR__, 1) . '/controllers/cart_controller.php');
include_once(dirname(__DIR__, 1) . '/controllers/product_controller.php');
include_once(dirname(__DIR__, 1) . '/settings/core.php');


if(isset($_GET['updatequant'])){

    $product_id= $_GET['id'];
    
    // $results = Oneprod($product_id);

    $user_id = $_SESSION['id'];
    $quantity = $_GET['updatequant'];
    
    $result = update_quant($user_id, $quantity, $product_id);

    if ($result) {
                echo "<script>alert('Quantity has been updated')</script>";
                echo "<script>window.open('../view/cart.php','_self')</script>";
            } else {
                echo "<script>alert('Quantity has not been updated')</script>";
                echo "<script>window.open('../view/cart.php','_self')</script>";
            }


}


?>