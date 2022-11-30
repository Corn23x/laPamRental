<?php
include(dirname(__DIR__, 1) . '/settings/core.php');

include("../controllers/customer_controller.php");

//  do not include a session on a page that has been included and contains a session.



// echo $_POST['enter'];
if(isset($_POST['enter'])){
    $email = $_POST['e_mail'];
    $password = $_POST['pass'];
   

    
    
    $Email= mail_ctr();
    if($Email){
        $result = login_ctr();
        

        if($result){
            $_SESSION['id'] = $result['customer_id'];
            $_SESSION['user_role'] = $result['user_role'];
            $_SESSION['customer_name'] = $result['customer_name'];
           
            if($_SESSION['user_role']== 2){
         echo "<script>alert('Login Successful')</script>";
            echo "<script>window.open('../admin/admin.php','_self')</script>";

            // header('Location: ../landing_page.php');
    }elseif($_SESSION['user_role']== 1){

        echo "<script>alert('Login Successful')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }

    }else{
        echo "<script>alert('Login Failed')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
    }



    
    }





?>