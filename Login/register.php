<?php
	// landing/index page

include('../functions/common_function.php');
include('../controllers/customer_controller.php');
	
getLinks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab</title>
</head>
<body>

<div class="container">
	<!-- <form action="" method="post"> -->

<form class="well form-horizontal" action="./registerprocess.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">Full Name</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="first_name" id= "name" placeholder="First Name" class="form-control"  type="text">
</div>
</div>
</div>




<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">Email</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="email" id= "email" placeholder="Email" class="form-control"  type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Password</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="user_password" id= "user_password" placeholder="Password" class="form-control"  type="password">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Confirm Password</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">Country</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
	<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="country" id= "country" placeholder="Enter country" class="form-control"  type="text">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">City</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
	<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="city" id= "city" placeholder="Enter city" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->
   
<div class="form-group">
<label class="col-md-4 control-label">Contact No.</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
	<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="contact_no" id= "contact" placeholder="(639)" class="form-control" type="text">



</div>
</div>
</div>

<!-- Select Basic -->



<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
<button type="submit" name="submit" class="btn btn-warning" >SUBMIT <span class="glyphicon glyphicon-send"></span></button>



</div>
</div>

</fieldset>
</form>
</div>
</div>
<!-- /.container -->
<!-- </form> -->

<!-- <script>
        url:$
        type:
        data;{
            name=documet.getElementById('name').value;
            email= documet.getElementById('email').value;
            password = documet.getElementById('user_password').value;
            email= document.getElementById('email').value;
            country = document.getElementById('country').value;
            city = document.getElementById('city').value;
            contact = document.getElementById('contact').value;

        }
     
    
    </script> -->

</body>
</html>

	