<?php
include("../controllers/product_controller.php");

if (isset($_GET['submit'])){
$default = $_GET['category'];
    //make view aware of controller
    
    //run controller responsible for insert
    $insert = cat_insert($default);

    if ($insert) {
        echo "<script>alert('Category added successful')</script>";
        echo "<script>window.open('../admin/category.php','_self')</script>";
    } 
    else {
    echo 'insert failed'; 
    } 
}


?>