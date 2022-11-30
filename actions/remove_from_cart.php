<?php
include_once(dirname(__DIR__, 1) . '/controllers/cart_controller.php');
include_once(dirname(__DIR__, 1) . '/settings/core.php');

if (isset($_GET['id'])) {

    $productid = $_GET['id'];
    $customerid= $_SESSION['id'];
    $result = delete_cart($productid, $customerid);

    if ($result) {
        echo "<script>alert('Product has been removed from cart')</script>";
        echo "<script>window.open('../view/cart.php','_self')</script>";
    } else {
        echo "<script>alert('Product has not been removed from cart')</script>";
        echo "<script>window.open('../view/cart.php','_self')</script>";
    }

}


?>