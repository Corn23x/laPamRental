<?php
//start session
session_start(); 

//for header redirection
ob_start();

$current_file = $_SERVER['SCRIPT_NAME']; 
// $http_referer = $_SERVER['HTTP_REFERER'];




//funtion to check for login
function check_login(){
	//check if login session exit
	if (!isset($_SESSION['customer_id'])) 
	{
		//redirect to login page
    	header('Location: ../Login/login.php');
	}
}

//function to check for permission 
function check_permission(){
	//get session role
	if (isset($_SESSION['user_role'])) {
		//assign session to an array
		return $_SESSION['user_role'];
	}
}


?>