<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>



<?php
include_once(dirname(__DIR__, 1) . '/settings/core.php');
include_once(dirname(__DIR__,1). "/controllers/customer_controller.php");

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
           
            if($_SESSION['user_role']== 2){
        
            echo "<script>window.open('../admin/admin.php','_self')</script>";

            // header('Location: ../landing_page.php');
    }elseif($_SESSION['user_role']== 1){

        echo "<script>window.open('../index.php','_self')</script>";


    }

    }else{
        echo'
        <div class="alert alert-danger">
                        <h1>Login Failed. </h1>
                        </div>
        ';
        
        header("Refresh:1; url=login.php");
        
    }
    }



    
    }


 






?>