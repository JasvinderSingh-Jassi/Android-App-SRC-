<?php
session_start();
if(isset($_SESSION['isloggedout']) && $_SESSION['isloggedout']=="true"){
	header("location:Logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	
 p.round3 {
  border: 2px solid lightblue;
  border-radius: 50px;
	 font-size: 15px;
	 color: black;
}

	

	#example1 {
  border: 2px solid black;
  padding: 25px;
  background: url(back.jpg);
  background-repeat: no-repeat;
  background-size: auto;
}
	.container2 {
  display: inline-block;
 
}

.bar1, .bar2, .bar3 {
  width: 35px;
  height: 5px;
  background-color: black;
  margin: 6px 0;
  transition: 0.4s;
}

.change .bar1 {
  -webkit-transform: rotate(-45deg) translate(-9px, 6px);
  transform: rotate(-45deg) translate(-9px, 6px);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
  -webkit-transform: rotate(45deg) translate(-8px, -8px);
  transform: rotate(45deg) translate(-8px, -8px);
}
	.dropbtn {
  background-color: transparent;
  color: black;
  padding: 6px;
  font-size: 3px;
  border: none;
}

.dropdown {
	
  display: inline-block;
position: absolute;
  top:3.2%;
  left: 86%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  color: black;
  font-size: 16px;
  padding: 0px 0px;
  border: none;
  
  text-align: center;
}

.dropdown-content {
 
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 60px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 10px 0px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: transparent;}
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
		.container8 {
  position: relative;
  text-align: center;
  color: black;
	
}
   
	.container1 {
  position: relative;
  text-align: center;
  color: white;
	
}
.container4 {
  position: relative;
  text-align: center;
  color: white;
top: 20px;
  left: 0px;
}
	
	.container5 {
  position: relative;
  text-align: center;
  color: white;
top: 0px;
  left: 0px;
}
		.container9 {
  position: relative;
  text-align: center;
  color: lightblue;
top: 0px;
  left: 0px;
}
.container6 {
  position: absolute;
  text-align: center;
  color: black;
top: 90px;
  left: 148px;
	font-size: 25px;
}
	.top-left1 {
  position: absolute;
  top: -5px;
  left: 140px;
font-size: 30px;
}

.top-left {
  position: absolute;
  top: -8px;
  left: 20px;
font-size: 25px;
}




.centered {
  position: absolute;
  bottom: 30px;
  right: 135px;
}
	}

	.container {
  position: relative;
  width: 100%;
  max-width: 400px;
		
}
	.avatar {
  vertical-align: middle;
  width: 150px;
  height: 150px;
  border-radius: 50%;
}
	.avatar1 {
  vertical-align: middle;
  width: 45px;
  height: 45px;
  border-radius: 50%;
		position: absolute;
  
  left: 2px;
}
img {
  border-radius: 50%;
}
	.btn {        
        font-size: 15px;
        font-weight: bold;
    }
		.top-left11 {
  position: absolute;
  top: 10px;
  left: 140px;
font-size: 30px;
}
</style>

</head>
<body>
	
	
<div class="container">	
<div class="dropdown">
	
  <button class="dropbtn">
 <div class="container2" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button>
  <div class="dropdown-content">
    <a href="https://siliconroboticsclub.000webhostapp.com/Desktop.php">Desktop</a>
    <a href="https://siliconroboticsclub.000webhostapp.com/Logout.php">Logout</a>
  </div>
</div>
</div></div>
<div class="container1">
	<h1 div class="top-left">Silicon Robotics Club</h1>
</div>
	<img src="header.jpg"  width="415" height="50">
	</br>
<div class="container8">
	<h1 div class="top-left11"><B><I>Developer</I></B></h1>
</div>
		</br>
</br>
</br>
<div class="container4">
<img src="name1.jpg" alt="Avatar" class="avatar">
	
	</div>
</br>
	<div class="container5">
		<p class="round3"><img src="sardarji.PNG" alt="Avatar" class="avatar1"><B>Name</B></br> Jasvinder Singh</p>
		
	
<p class="round3"><img src="call.jpg" alt="Avatar" onclick="call()" class="avatar1"><B>Call</B></br> +919348142762 </p>

<p class="round3"><a href= "https://api.whatsapp.com/send?phone=+919122931105"><img src="whatsapp.jpg" alt="Avatar" class="avatar1"></a><B>WhatsApp</B></br> +919122931105 </p>

<p class="round3"><a href= "mailto:jasvinder1997@gmail.com"><img src="email.png" alt="Avatar" class="avatar1"></a><B>Email</B></br>&nbsp;&nbsp; jasvinder1997@gmail.com </p>

<p class="round3"><img src="semester.PNG" alt="Avatar" class="avatar1"><B>Semester</B></br> 6th </p>

<p class="round3"><img src="bio.jpg" alt="Avatar" class="avatar1"><B>Bio</B></br></br> Jasvinder Singh is a computer science and engineering student, has management and conving skills and is passionate in organizing events. He is a certified android app developer and techaholic. </p>

<p class="round3"><img src="address.png" alt="Avatar" class="avatar1"><B>Address</B></br>&nbsp;&nbsp;&nbsp;&nbsp; Sonari,Jamshedpur-831011 </p>

<p class="round3"><img src="website.jpg" alt="Avatar" class="avatar1"><B>Website</B></br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;https://application3solutions.wordpress.com </p>
		</div>

 
<script>
	function myFunction(x) {
  x.classList.toggle("change");
}
	function call() 
	{
		window.open('tel:919348142762'); 
	}
	

</script>
</body>
</html>                                		                            