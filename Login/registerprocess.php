<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
	
</body>
</html>

<?php
include_once(dirname(__DIR__,1). "/controllers/customer_controller.php");


$errors = array();

// if (empty($_POST['first_name'])||
// empty($_POST['last_name'])||
// empty($_POST['email'])||
// empty($_POST['user_password'])||
// empty($_POST['country'])||
// empty($_POST['city'])||
// empty($_POST['contact_no'])) {

// 	echo '
// 	<div class="alert alert-danger">
// 				<h1>Please fill all fields!</h1>
// 				</div>
// 				';
// 				header("refresh:2;url=register.php");
// }

// else{
	// The variable used for password in class is what must be used for the hash


if(isset($_POST['submit'])){
	$name = $_POST['first_name'];
	$lname= $_POST['last_name'];
	$email = $_POST['email'];
	$user_password = $_POST['user_password'];
	$_POST['user_password'] = password_hash($user_password, PASSWORD_DEFAULT);
	$country = $_POST['country'];
	$city = $_POST['city'];
	$contact_no = $_POST['contact_no'];
	// $role = 1;

	// Check if any fields are empty
	if(empty($name)){
        array_push($errors, "Enter first name");
    }
    
    if(empty($lname)){
        array_push($errors, "Enter last name");
    }

    if(empty($email)){
        array_push($errors, "Enter Email");
    }

    if(empty($user_password)){
        array_push($errors, "Enter passowrd");
    }

    if(empty($contact_no)){
        array_push($errors, "Enter a valid contact");
    }

    if(strlen($contact_no) != 10){
        array_push($errors, "Invalid contact info");  
    }

    if ($contact_no[0] != '0') {
        array_push($errors, "Invalid Number format"); 
    }

    $data = select_email_ctr($email); 
    if (!empty($data)) {
        array_push($errors, "email already exists"); 
    }



	if(count($errors) == 0){
		$data = insertCustomer_ctr($name, $lname, $email, $_POST['user_password'], $country, $city, $contact_no);
		if($data){
			$_SESSION['success'] = "Registration Successful";
			header("location: ../index.php");
		}
		else{
			array_push($errors, "Registration Failed");
		}
	}
	else{
		session_start();
		$_SESSION['errors'] = $errors;
		header("location: register.php");
	}



	// insertCustomer_ctr($name,$lname,$email,$_POST['user_password'],$country,$city,$contact_no );
	// // $customer = new customerClass();
	// // $customer->submitRec();

	// echo "<script>alert('Sign up Successful')</script>";
    // echo "<script>window.open('../index.php','_self')</script>";

}


//}


?>