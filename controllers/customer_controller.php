<?php
include_once(dirname(__DIR__,1). "/classes/customer_class.php");
// include_once(dirname(__DIR__,1). "/functions/common_function.php");
// include("../functions/common_function.php");

// edit,select,update,delete function

    // Select
    function insertCustomer_ctr($fname,$lname,$email,$password,$country,$city,$contact){
        // Create an instance
    
        $select_item= new customerClass();

        // Execute a query
       return $select_item->submitRec($fname,$lname,$email,$password,$country,$city,$contact);

    
    }

    

    function login_ctr(){
        // Create an instance
    
        $select_item= new customerClass();

        // Execute a query
       return $select_item->login();

      
    }

      
    


    function mail_ctr(){
        // Create an instance
    
        $select_item= new customerClass();

        // Execute a query
       return $select_item->mail_cls();

    }

    function select_email_ctr($email){
        // Create an instance
    
        $select_item= new customerClass();

        // Execute a query
       return $select_item->select_email($email);

    }

    
?>