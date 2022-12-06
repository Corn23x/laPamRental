<?php
// Add product processes

include('../controllers/product_controller.php');

if(isset($_POST['insert_product'])){

$product_title=$_POST['product_title'];
$description=$_POST['description'];
$product_keywords=$_POST['keywords'];
$product_category=$_POST['product_categories'];
$product_brands=$_POST['product_brands'];
$product_price=$_POST['product_price'];


// Accessing images ($_FILES has to be used for images and not POST)
$product_image1=$_FILES['product_image1']['name'];

$run= prod_insert($product_category, $product_brands, $product_title, $product_price, $description, $product_image1,$product_keywords);


//  Accessing image tmp name
$temp_image1=$_FILES['product_image1']['tmp_name'];


// Checking empty condition (Bringing an alert if a user does not fill a certain field)
if($product_title=='' or $description=='' or $product_keywords=='' or $product_category=='' 
or $product_brands=='' or $product_price=='' or  $product_image1==''){

  echo "<script> alert('Please fill all the available fields!')</script>";
  exit();
}elseif($run){
  move_uploaded_file($temp_image1, "../images/$product_image1");

  

 echo "<script>window.open('../admin/products.php','_self')</script>";

}



}

?>