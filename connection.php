<?php

header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
require 'include/config.php';
require 'include/trigger-email.php';


/********************************************************************
*********************************************************************

                      # Login Page #
	
   	  	Ajax and fetch request from database for Login Page           

********************************************************************/

// Fetch Login Detail

if(isset($_GET['submitloginrequest'])) {
	$email     = mysqli_real_escape_string($conn, $_POST['loginEmail']);
	$password  = mysqli_real_escape_string($conn, $_POST['loginPassword']);

	$sql_email = "SELECT * FROM `registration_list` WHERE email_id = '$email';";
	$result_email = $conn->query($sql_email);

	if ($result_email->num_rows > 0) {

		// Encrypt Password

		$encrypted = md5($password);	
		
		$sql_password    = "SELECT * FROM `registration_list` WHERE email_id = '$email' AND password = '$encrypted';";
		$result_password = $conn->query($sql_password);

		if ($result_password->num_rows > 0){
			session_start();
        	$_SESSION['email'] = $email;
        	setcookie('EMLSID', 'prjranj', time() + (86400 * 15), "/"); 
			echo 3;
		}
		else{
			echo 2;
		}
	}
	else{
		echo 1;
	}
}


/********************************************************************
*********************************************************************

                      # Signup Page #
	
   	  	Ajax and fetch request from database for Signup Page           

*********************************************************************
********************************************************************/

// Insert Sign Up Detail 

if(isset($_GET['submitsignuprequest'])){

	$name       = $_POST['signupName'];
	$email_id   = mysqli_real_escape_string($conn, $_POST['signupEmail']);
	$password   = mysqli_real_escape_string($conn, $_POST['signupPassword']);
	$encyptpass = md5($password);
	$image      = 'usericon.png';

	$sql_check    = "SELECT * FROM `registration_list` WHERE email_id = '$email_id';";
	$result_check = $conn->query($sql_check);

	if ($result_check->num_rows > 0) {
		echo 1;
	}
	else{
		$signup_query = "INSERT INTO `registration_list` (`email_id`, `name`, `password`, `image`) VALUES ('$email_id', '$name', '$encyptpass', '$image')";
		$validate_query = $conn->query($signup_query);

		if($validate_query){
			echo 2; // activate_account($name, $email_id);
		}
		else{
			echo("Error description: " . mysqli_error($conn));
		}
	}
}


/********************************************************************
*********************************************************************

                  # Forgot Password Page #
	
   	Ajax and fetch request from database for Forgot Password Page           

*********************************************************************
********************************************************************/

if(isset($_GET['submitnewpasswordrequest'])){

	$email = $_POST['forgotpasswordEmail'];
	
	$sql_check = "SELECT * FROM `registration_list` WHERE email_id = '$email';";
	$result_check = $conn->query($sql_check);
	if ($result_check->num_rows > 0) {
        $password   = createRandomNumber(8);
        $encrypted  = md5($password);
        $sql_update = "UPDATE `registration_list` SET `password` = '$encrypted' WHERE email_id = '$email';";
        if($conn->query($sql_update)){
        	echo 2; // forgot_password_reset($email,$password);
        }
	}
	else{
		echo 1;
	}
}

// Function to generate random number 

function createRandomNumber($length_of_string) { 
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
    return substr(str_shuffle($str_result), 0, $length_of_string); 
} 

?>