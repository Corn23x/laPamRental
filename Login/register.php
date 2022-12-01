<?php
	// landing/index page

include_once(dirname(__DIR__,1). '/functions/common_function.php');
include_once(dirname(__DIR__,1). '/controllers/customer_controller.php');
include_once(dirname(__DIR__,1). '/settings/core.php');
	
getLinks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<script>  
// function verifyPassword() {  
//   var pw = document.getElementById("user_password").value;  
//   //check empty password field  
//   if(pw == "") {  
//      document.getElementById("message").innerHTML = "**Fill the password please!";  
//      return false;  
//   }  
   
//  //minimum password length validation  
//   if(pw.length < 8) {  
//      document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
//      return false;  
//   }  
  
// //maximum length of password validation  
//   if(pw.length > 15) {  
//      document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
//      return false;  
//   } else {  
//    //  alert("Password is correct");
//    die  
//   }  
// }  
</script>  


<body>
<br><br><br><br><br><br><br><br><br>
<div class="container">
	<!-- <form action="" method="post"> -->

<form class="form-horizontal" action="registerprocess.php" method="post" enctype="multipart/form-data" id="contact_form" onsubmit="return validateForm(event);">
<?php 
                  if(isset($_SESSION['errors'])){
                    $errors = $_SESSION['errors'];
                    foreach($errors as $error) {
                      ?>
                        <small style="color: red"><?=$error."<br>";?></small> 
                      <?php 
                    }
                  }
                  $_SESSION['errors'] = null; 
         ?>
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">First Name</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="first_name" id= "name" placeholder="First Name" class="form-control"  type="text" required>
</div>
</div>
</div>



<div class="form-group">
<label class="col-md-4 control-label">Last Name</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="last_name" id= "lname" placeholder="Last Name" class="form-control"  type="text" required>
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

<!-- Password validation? -->

<div class="form-group">
<label class="col-md-4 control-label" >Password</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="user_password" id="user_password" placeholder="Password" class="form-control"  type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
 title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required>

<!-- <span id="message" style="color:red"></span> <br><br> -->
</div>
</div>
</div>

<!-- Text input-->


<div class="form-group">
<label class="col-md-4 control-label">Country</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
	<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="country" id= "country" placeholder="Enter country" class="form-control"  type="text" required>
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
<button type="submit" id="submit" name="submit" class="btn btn-warning" >SUBMIT <span class="glyphicon glyphicon-send"></span></button>



</div>
</div>

</fieldset>
</form>
<br><br>
<center><p class="login-card-footer-text text-dark">Already have an account? <a href="login.php" class="text-warning">Sign in here</a></p>
                <nav class="login-card-footer-nav">
                </nav></center>

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


    <?php
    
// if (empty($_POST['first_name'])||
// empty($_POST['last_name'])||
// empty($_POST['email'])||
// empty($_POST['user_password'])||
// empty($_POST['confirm_password'])||
// empty($_POST['country'])||
// empty($_POST['city'])||
// empty($_POST['contact_no'])) {

// 	echo '
// 	<div class="alert alert-danger">
// 				<h1>Please fill all fields!</h1>
// 				</div>
// 				';
// 	// die('Please fill all fields!'); 
// }elseif($_POST['user_password'] != $_POST['confirm_password']) {
// 		die('
// 	<div class="alert alert-danger">
// 				<h1>Passwords do not match!</h1>
// 				</div>
// 				' );

// 		// die('Password does not match!');
// 	}
    
    ?>

</body>
</html>

	