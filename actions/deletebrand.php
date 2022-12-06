<?php
include_once(dirname(__DIR__, 1) . '/controllers/product_controller.php');


if (isset($_GET['id'])) {

    $default = $_GET['id'];
    //make view aware of controller
    
    //run controller responsible for insert
    $delbrand = delete_brand($default);

    if ($delbrand) {
        echo "<script>window.open('../admin/brand.php','_self')</script>";
    } 

    else {
     echo "<script>alert('Update failed')</script>";
        echo "<script>window.open('../admin/brand.php','_self')</script>";
    } 

}

?>