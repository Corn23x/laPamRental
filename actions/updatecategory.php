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

if (isset($_POST['submit'])) {
    require('../controllers/product_controller.php');
    $brid =$_POST['id'];
    $updatecat= $_POST['updatecat'];
    
    $updcat = cat_update($updatecat, $brid);

    if ($updcat) {
        echo "<div class='alert alert-success' role='alert'>
        Update Successful. <a href='../admin/category.php' class='alert-link'>Return to Category page.</a> 
      </div>";
    } 

    else {
    echo 'update failed'; 
    } 
}

?>