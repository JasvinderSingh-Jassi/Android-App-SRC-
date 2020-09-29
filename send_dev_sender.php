<?php
session_start();
$con=mysqli_connect('localhost','id13357506_jassi1997','J@svindersingh1997','id13357506_register_user');
$email=$_POST['email'];
$password=$_POST['password'];
$email1="siliconroboticsclubsit@gmail.com";
$sql=mysqli_query($con,"select * from user_register where email='$email'");
$name='sample-name';
if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$name=$row["name"];
	}
}
$sql=mysqli_query($con,"select * from user_register where email='$email'");
$phone_no='sample-phone';
if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$phone_no=$row["phone_no"];
	}
}
$res=mysqli_query($con,"select * from user_register where email='$email'");
$count=mysqli_num_rows($res);
if($count>0){
	$html="Dear ".$name.",<br>Thank you for registering with Silicon Robotics Club. <br><br> User Name: ".$email."<br>Password: ".$password."<br><br><br><br>Thanks,<br>Team Silicon Robotics Club,Sambalpur";
	$html1="New user has registered to your App Silicon Robotics Club with the following details:<br><br> <br>Name: ".$name."<br>Email: ".$email."<br>Phone No: ".$phone_no;
	$_SESSION['EMAIL']=$email;
	smtp_mailer1($email,'Thank you for registering with Silicon Robotic Club',$html);
	smtp_mailer2($email1,$name.' registered on your app.',$html1);
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
function smtp_mailer1($to,$subject, $msg){
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
	}else{
	}
}
?>