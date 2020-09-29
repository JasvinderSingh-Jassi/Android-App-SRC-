<?php


define('HOST', 'localhost');
define('USER', 'id13357506_jassi1997');
define('PASSWORD', 'J@svindersingh1997');
define('DB', 'id13357506_register_user');



$con = mysqli_connect(HOST, USER, PASSWORD, DB) or die("Unable to Connect");
$userName = $_GET['user_name'];
$userID = $_GET['user_id'];
$userPhone = $_GET['user_phone'];

if($userName == '' || $userID == '' || $userPhone == ''){
	echo 'User Name, ID or Phone_No can not be empty';
}else{
	$query = "select * from user_register where email = '$userID'";
	$recordExists = mysqli_fetch_array(mysqli_query($con, $query));
	if(isset($recordExists)){
		
		echo 'User already exists';
	}else{
		$query = "INSERT INTO user_register (name, phone_no, email, password, otp) VALUES ('$userName', '$userPhone', '$userID', '', '')";
		if(mysqli_query($con, $query)){
			echo 'User registered successfully';
		}else{
			echo 'oops! please try again!';
		}
	}


	mysqli_close($con);
}



?>
