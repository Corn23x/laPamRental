<?php

include_once(dirname(__DIR__, 1) . '/classes/cart_class.php');

function cart_add($product_id,$user_id, $quantity, $ip) {
    //model class instance
    $cart = new Cart_class();

    //run insert model method
    return $cart->insert_cart($product_id,$user_id, $quantity, $ip);

    // if ($run_cart) {
    //     return true;
    // } else {
    //     return false;
    // }
}

function cart_select($productid,$customerid) {
    //model class instance
    $cartview = new Cart_class();

    //run select phone model method
    $run_cart = $cartview->select_cart($productid,$customerid);
    //create array
    
    return $run_cart;
}

function delete_cart($productid, $customerid) {
    //model class instance
    $cartdel = new Cart_class();

    //run select phone model method
    $run_delete = $cartdel->cart_delete($productid, $customerid);
    if ($run_delete) {

        return true;
    } else {
        return false;
    }
}

function update_quant( $customerid, $quantity, $productid) {
    //model class instance 
    $cartupdate = new Cart_class();

    //run select phone model method
    $run_update = $cartupdate->quant_update($customerid, $quantity, $productid);
    if ($run_update) {
        return true;
    } else {
        return false;
    }
}

function select_all_cartctr($customerid){
    $cart = new Cart_class();
    $run_cart = $cart->select_all_cart($customerid);
    return $run_cart;
}

function countCartCtr($id){
    $cart = new Cart_class();
    $run_cart = $cart->countCart($id);
    return $run_cart;
}

function cartnumctr($productid,$customerid){
    $cart = new Cart_class();
    $run_cart = $cart->cartnum($productid,$customerid);
    return $run_cart;
}

function insert_orderctr($customerid, $invoice_no, $orderdate, $orderstatus){
    $cart = new Cart_class();
    $run_cart = $cart->insertorder($customerid, $invoice_no, $orderdate, $orderstatus);
    return $run_cart;
}

function selectorderctr($customerid, $invoice_no){
    $cart = new Cart_class();
    $run_cart = $cart->selectorder($customerid, $invoice_no);
    return $run_cart;
}

function makepaymentctr($amount, $customerid, $orderid, $currency, $paymentdate){
    $cart = new Cart_class();
    $run_cart = $cart->makepayment($amount, $customerid, $orderid, $currency, $paymentdate);
    return $run_cart;
}

function  paymentdetailsctr($orderid, $productid, $quantity) {
    $cart = new Cart_class();
    $run_cart = $cart->paymentdetails($orderid, $productid, $quantity);
    return $run_cart;
}

function  emptycartctr($customerid) {
    $cart = new Cart_class();
    $run_cart = $cart->emptycart($customerid);
    return $run_cart;
}

function  selectallorderctr($customerid) {
    $cart = new Cart_class();
    $run_cart = $cart->selectallorder($customerid);
    return $run_cart;
}

function selectallordercustomer($customerid){
    $cart = new Cart_class();
    $run_cart = $cart->selectallorder_customer($customerid);
    return $run_cart;
}

function selectallorderdetails_ctr($orderid){
    $cart = new Cart_class();
    $run_cart = $cart->selectallorderdetails($orderid);
    return $run_cart;
}

function selectallOrder_ctr(){
    $cart = new Cart_class();
    $run_cart = $cart->selectallorder();
    return $run_cart;
}
?>