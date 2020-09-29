<?php
session_start();
$con=mysqli_connect('localhost','id13357506_jassi1997','J@svindersingh1997','id13357506_register_user');
$name=$_POST['name'];
$email=$_POST['email'];
$sic=$_POST['sic'];
$semester=$_POST['semester'];
$number=$_POST['number'];
$branch=$_POST['branch'];
$comments=$_POST['comments'];
$email1="siliconroboticsclubsit@gmail.com";
$res=mysqli_query($con,"select * from user_register where email='$email'");
$count=mysqli_num_rows($res);
if($count>0){
	$html1="Name: ".$name."<br>Email: ".$email."<br>SIC: ".$sic."<br>Semester: ".$semester."<br>Phone No: ".$number."<br>Branch: ".$branch."<br>Query: ".$comments;
	$html="Your Query is successfully received, we will contact u asap.<br>Name: ".$name."<br>Email: ".$email."<br>SIC: ".$sic."<br>Semester: ".$semester."<br>Phone No: ".$number."<br>Branch: ".$branch."<br>Query: ".$comments;
	$_SESSION['EMAIL']=$email;
	smtp_mailer1($email1,'Query Form',$html1);
	smtp_mailer2($email,'Query Details',$html);
	echo "yes";
}
else{
	echo "not_exist";
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
		echo "Mailer Error: " . $mail->ErrorInfo;
	}else{
		echo "Message has been sent";
	}
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
	}else{
	}
}
?>