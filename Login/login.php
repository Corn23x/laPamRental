<?php
include_once(dirname(__DIR__,1). "/functions/common_function.php");

getLinks();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<legend><center><h2><b>Login Form</b></h2></center></legend><br><br><br><br>

<form class="Absolute-Center is-Responsive" action="loginprocess.php" method="POST">
  
<div class="container bg-dark form-control">
    <div class="row">
    <div class="Absolute-Center is-Responsive">
    <div id="logo-container">
      <div class="col-sm-12 col-md-10 col-md-offset-1">
  <div class="mb-3">
    
    <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
    <input type="email" name="e_mail" class="form-control text-dark" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-light">Password</label>
    <input type="password" name="pass" class="form-control text-dark" id="exampleInputPassword1">
  </div>


  
  <input type="submit" name="enter" value="Submit" class="btn btn-warning"></input>
    
</form>
</div>
</div>
</div>
</div>
</body>


</html>

