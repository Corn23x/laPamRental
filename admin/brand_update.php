<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Brand</title>
</head>
<body>
    <form action="../actions/updatebrand.php" method="post">
    <input name="updatebrand" type="text">
    <input name="summit" type="submit" value="Submit"> 
  <?php echo "<input type='hidden' name='id' value= $_GET[id]> "?>

    </form>
</body>
</html>