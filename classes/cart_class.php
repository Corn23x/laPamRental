<?php
include_once (dirname(__DIR__,1) . '/settings/db_class.php');



class Cart_class extends db_connection{

    //Insert method
    public function insert_cart($product_id,$user_id, $quantity, $ip) {

        //formulate insert query
        $sql = "INSERT INTO cart(p_id,c_id,qty,ip_add) VALUES('$product_id','$user_id','$quantity','$ip')";

        if($this->select_cart($product_id, $user_id)){
            return array(false, "Product already in cart. Increse quantity instead.");
        }
        //execute query
        $run= $this->db_query($sql);

        if($run){
            return array(true, "Product added to cart");
        }else{
            return array(false, "Product not added to cart");
        }
    }


    //Select method
    public function select_cart($productid,$customerid) {

        //formulate select query
        $sql = "SELECT * FROM cart where p_id= '$productid' and c_id= '$customerid'";
        //$result = $this->db_fetch($sql);

        //execute query
        return $this->db_fetch_all($sql);

        if($this->db_count() < 1){
            return false;
        }else{
            return true;
        }

    }


    //Delete model
    public function cart_delete($productid,$customerid) {

        //formulate delete query
        $sql = "DELETE FROM cart WHERE p_id='$productid' AND c_id='$customerid'";

        //execute query
        return $this->db_query($sql);
    }



    //Update model
    public function quant_update($customerid, $quantity, $productid) {

        //formulate update query
        $sql = "UPDATE cart SET qty = '$quantity' WHERE c_id = '$customerid' AND p_id='$productid'";

        //execute query
        return $this->db_query($sql);
    }

    public function select_all_cart($customerid){
        $sql = "SELECT p_id, qty FROM cart where c_id= $customerid";
        return $this->db_fetch_all($sql);
    }
    

    public function countCart($id){
         $sql= "SELECT COUNT(*) FROM cart WHERE c_id='$id'";
            return $this->db_fetch_one($sql)['COUNT(*)'];

    }

    public function cartnum($productid,$customerid){
        $sql = "SELECT qty FROM cart WHERE p_id='$productid' AND c_id='$customerid'";
        return $this->db_fetch_all($sql);
    }


    // Payment

    public function insertorder($customerid, $invoice_no, $orderdate, $orderstatus){
        $sql = "INSERT INTO orders (customer_id, invoice_no, order_date, order_status) VALUES($customerid, '$invoice_no',' $orderdate', '$orderstatus')" ;
                return $this->db_query($sql);
    }


    public function selectorder($customerid, $invoice_no){
        $sql = "SELECT order_id FROM orders WHERE customer_id = $customerid AND invoice_no = '$invoice_no'";
            return $this->db_fetch_one($sql)['order_id'];
    }


    public function makepayment($amount, $customerid, $orderid, $currency, $paymentdate){
        $sql = "INSERT INTO payment (amt, customer_id, order_id, currency, payment_date) VALUES($amount, $customerid, $orderid, '$currency', '$paymentdate')";
            return $this->db_query($sql);
    }


    public function paymentdetails($orderid, $productid, $quantity){
        $sql = "INSERT INTO orderdetails (order_id, product_id, qty) VALUES ($orderid, $productid, $quantity)";
        return $this->db_query($sql);
    }


    public function emptycart($customerid){
        $sql = "DELETE FROM cart WHERE c_id = $customerid";
        return $this->db_query($sql);
    }


    public function selectallorder(){
        $sql = "SELECT * FROM orders";
        return $this->db_fetch_all($sql);
    }

    public function selectallorder_customer($customerid){
        $sql = "SELECT * FROM orders WHERE customer_id = $customerid";
        return $this->db_fetch_all($sql);
    }

    public function selectallorderdetails($orderid){
        $sql = "SELECT * FROM orderdetails WHERE order_id = $orderid";
        return $this->db_fetch_all($sql);
    }



}


?>