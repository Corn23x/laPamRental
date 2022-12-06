<?php
include("../controllers/product_controller.php");

if (isset($_GET['submit'])){
$default = $_GET['brand'];
    //make view aware of controller
    
    //run controller responsible for insert
    $insert = brand_add($default);

    if ($insert) {
        echo "<script>window.open('../admin/brand.php','_self')</script>";
    } 
    else {
    echo 'insert failed';
    } 
}


?>