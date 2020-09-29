<?php
session_start();
$con=mysqli_connect('localhost','id13357506_jassi1997','J@svindersingh1997','id13357506_register_user');
$email=$_POST['email'];
$password=$_POST['password'];
$res=mysqli_query($con,"select * from user_register where email='$email'");
$count=mysqli_num_rows($res);
if($count>0){
	$otp=rand(11111,99999);
	mysqli_query($con,"update user_register set password='$password', otp='$otp' where email='$email'");
	$html="Your otp verification code is ".$otp;
	$_SESSION['EMAIL']=$email;
	smtp_mailer2($email,'OTP Verification',$html);
	echo "yes";
}
else{
	echo "not_exist";
}



function smtp_mailer2($to,$subject, $msg){
	require_once("smtp/class.phpmailer.php");
	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Username = "siliconroboticsclubsit@gmail.com";
	$mail->Password = "Robotics@123";
	$mail->SetFrom("siliconroboticsclubsit@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
		echo "Mailer Error: " . $mail->ErrorInfo;
	}else{
		echo "Message has been sent";
	}
}
?>