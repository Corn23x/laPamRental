<?php
include_once(dirname(__DIR__,1). "/controllers/customer_controller.php");


if (empty($_POST['first_name'])||
empty($_POST['email'])||
empty($_POST['user_password'])||
empty($_POST['confirm_password'])||
empty($_POST['country'])||
empty($_POST['city'])||
empty($_POST['contact_no'])) {
	die('Please fill all fields!'); }

	if($_POST['user_password'] != $_POST['confirm_password']) {
		die('Password does not match!');
	}
else{
	// The variable used for password in class is what must be used for the hash

if(isset($_POST['submit'])){
	$name = $_POST['first_name'];
	$email = $_POST['email'];
	$user_password = $_POST['user_password'];
	$_POST['user_password'] = password_hash($user_password, PASSWORD_DEFAULT);
	$country = $_POST['country'];
	$city = $_POST['city'];
	$contact_no = $_POST['contact_no'];
	// $role = 1;


	insertCustomer_ctr();
	// $customer = new customerClass();
	// $customer->submitRec();

	echo "<script>alert('Sign up Successful')</script>";
    echo "<script>window.open('../index.php','_self')</script>";
}
}


?>