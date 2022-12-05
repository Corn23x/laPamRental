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
    <?php
    echo ' <div class="alert alert-success">
    <h1>Payment Successful! </h1>
    </div>
';

header("Refresh:1; url=order_history.php");
    
    
    ?>
    
</body>
</html>
