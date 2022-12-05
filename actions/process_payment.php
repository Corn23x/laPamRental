<?php
include_once(dirname(__DIR__, 1) . '/settings/core.php');
include_once(dirname(__DIR__, 1) . '/controllers/cart_controller.php');
include_once(dirname(__DIR__, 1) . '/classes/cart_class.php');



if(isset($_GET["ref"])){
    $ref = $_GET["ref"];

    $invoice_no = mt_rand(1000000, 9000000);
    $customerid = $_SESSION['id'];
   
    $currency = "GHC";
    $currentdate = date("Y-m-d");
   

    $product_cart = new Cart_class();
    $product_cart->insertorder($customerid, $invoice_no, $currentdate, "success");
    $orderid = $product_cart->selectorder($customerid, $invoice_no);
    // $product_cart-> makepayment($amount, $customerid, $orderid, $currency, $currentdate);

    $carts = select_all_cartctr($customerid);
    foreach($carts as $product){
        $productid = $product['p_id'];
        $quantity = $product['qty'];
         paymentdetailsctr($orderid, $productid, $quantity);
    }

    $product_cart->emptycart($customerid);

    echo "success";

}else{
    echo "Payment not successful";
}
?>