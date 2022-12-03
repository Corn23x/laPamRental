<?php
include_once(dirname(__DIR__,1). "/functions/common_function.php");
include_once(dirname(__DIR__,1). "/settings/core.php");

getLinks();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <style>
        .login-form{
            width: 340px;
            margin: 50px auto;
        }
        .login-form form{
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2{
            margin: 0 0 15px;
        }
        .form-control, .btn{
            min-height: 38px;
            border-radius: 2px;
        }
        .btn{
            font-size: 15px;
            font-weight: bold;
        }

          
    </style>
</head>




<body>
<legend><center><h2><b>Login Form</b></h2></center></legend><br><br><br><br>



<form class="Absolute-Center is-Responsive" action="loginprocess.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm(event);">

 
  
<div class="container bg-dark form-control">
    <div class="row">
    <div class="Absolute-Center is-Responsive">
    <div id="logo-container">
      <div class="col-sm-12 col-md-10 col-md-offset-1">
  <div class="mb-3">
    
    <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
    <input type="email" name="e_mail" class="form-control text-dark" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-light">Password</label>
    <input type="password" name="pass" class="form-control text-dark" id="exampleInputPassword1" required>
  </div>


  
  <input type="submit" name="enter" value="Submit" class="btn btn-warning"></input>
    
</form>
<br><br>
<a href="../index.php" class="btn btn-secondary" >Return to Home</a>

<br><br>
<p class="login-card-footer-text text-light">Don't have an account? <a href="register.php" class="text-warning">Register here</a></p>
                <nav class="login-card-footer-nav">
                </nav>

</div>
</div>
</div>
</div>


</body>
  	


</html>

