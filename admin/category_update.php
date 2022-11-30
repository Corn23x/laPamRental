<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
</head>
<body>
    <form action="../actions/updatecategory.php" method="post">
    <input name="updatecat" type="text">
    <input name="submit" type="submit"> 
  <?php echo "<input type='hidden' name='id' value= $_GET[id]> "?>

    </form>
</body>
</html>