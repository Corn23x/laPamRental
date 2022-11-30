<?php
require('../settings/db_class.php');

class customerClass extends db_connection{

   

    function submitRec(){
    // insert query
       $sql = "INSERT INTO `customer` (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact,user_role)
           VALUES
         ('".$_POST['first_name']."', '".$_POST['email']."', '".$_POST['user_password']."', '".$_POST['country']."', '".$_POST['city']."', '".$_POST['contact_no']."','1')";
        // execute query
        
        return $this->db_query($sql);
        
    }

    // Login function
    function login(){
        $email = $_POST['e_mail'];
        $password = $_POST['pass'];
        $sql = "SELECT * FROM `customer` WHERE customer_email = '".$email."'";
        $one= $this->db_fetch_one($sql);
 
        if(password_verify($password,$one['customer_pass'] )){
            return $one;
        }else{
            return false;
        }
        // $user_role= $_POST['user_role'];


       
       

      

      

}

function mail_cls(){
    $email = $_POST['e_mail'];
    $sql = "SELECT customer_email FROM `customer` WHERE customer_email = '".$email."'";

    return $this->db_fetch_one($sql);
}



}



?>