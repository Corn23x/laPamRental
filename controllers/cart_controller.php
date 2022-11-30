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

?>