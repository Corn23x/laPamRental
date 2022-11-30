<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../admin/css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>


<?php


if (isset($_POST['summit'])) {
    require('../controllers/product_controller.php');
    $brid = $_POST['id'];
    $updatebrand= $_POST['updatebrand'];
    
    $updbrand = update_brand($updatebrand, $brid);

    if ($updbrand) {
        // echo "<script>alert('Update successful')</script>";
        // echo "<script>window.open('../admin/brand.php','_self')</script>";

        echo "<div class='alert alert-success' role='alert'>
        Update Successful. <a href='../admin/brand.php' class='alert-link'>Return to Brands page.</a> 
      </div>";
    } 

    else {
    echo 'update failed'; 
    } 
}

?>