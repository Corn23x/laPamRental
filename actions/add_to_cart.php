
<?php
include_once(dirname(__DIR__, 1) . '/controllers/cart_controller.php');
include_once(dirname(__DIR__, 1) . '/settings/core.php');
include_once(dirname(__DIR__, 1) . '/functions/common_function.php');


if(!isset($_SESSION['id'])){
    echo'
    <div class="alert alert-info">
                    <h1>Please Sign In. </h1>
                    </div>
    ';
    
    header("Refresh:1; url=../Login/login.php");
    die;
}


if(isset($_GET['add_to_cart'])){

$product_id= $_GET['add_to_cart'];

$user_id = $_SESSION['id'];
$quantity = "1";
$ip = getIPAddress();

$result= cart_add($product_id,$user_id, $quantity, $ip);


$num_of_rows= cart_select($ip,$product_id);




if($result[0]){
    echo "<script>alert('Product has been added to cart')</script>";
    echo "<script>window.open('../view/cart.php','_self')</script>";


}else{

    echo "<script>alert('Product already added to cart, increase quantity instead.')</script>";
    echo "<script>window.open('../view/cart.php','_self')</script>";




}
    
    }






?>