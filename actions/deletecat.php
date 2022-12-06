<?php
include_once(dirname(__DIR__, 1) . '/controllers/product_controller.php');


if (isset($_GET['id'])) {
    
    $default = $_GET['id'];
    //make view aware of controller
    
    //run controller responsible for insert
    $delcat = cat_delete($default);

    if ($delcat) {
        // echo "<script>alert('Update successful')</script>";
        // echo "<script>window.open('../admin/category.php','_self')</script>";
    } 

    else {
        echo "<script>alert('Update failed')</script>";
        echo "<script>window.open('../admin/category.php','_self')</script>";
    } 

}

?>