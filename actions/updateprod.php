<?php
include('../controllers/product_controller.php');


if (isset($_POST['edit_product'])){
    
    $id = $_POST['id'];
    $cat = $_POST['product_categories'];
    $brand = $_POST['product_brands'];
    $title = $_POST['product_title'];
    $price = $_POST['product_price'];
    $desc = $_POST['description'];
    $product_image1= $_FILES['product_image1']['name'];
    $keywords = $_POST['keywords'];
  
    $result= prod_update($cat, $brand, $price, $title, $keywords,  $desc, $product_image1, $id);

    if ($result){
        echo "<script>alert('Updated successful')</script>";
        echo "<script>window.open('../admin/products.php','_self')</script>";

    }else{
        echo 'error';
    }
}

?>