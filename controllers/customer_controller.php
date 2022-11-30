<?php
include("../classes/customer_class.php");
// include("../functions/common_function.php");

// edit,select,update,delete function

    // Select
    function insertCustomer_ctr(){
        // Create an instance
    
        $select_item= new customerClass();

        // Execute a query
       return $select_item->submitRec();

    
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

?>