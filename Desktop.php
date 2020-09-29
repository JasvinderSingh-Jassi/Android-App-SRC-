<?php
session_start();
$_SESSION['isloggedin']="true";
?>
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
<title>PHP OTP Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
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
	top: 80%;
  left: 80%;
  display: inline-block;
position: absolute;
  top: 0%;
bottom:0%;
  left: 90%;
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
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
	
	#example1 {
  border: 1px solid black;
  background-size: 1200px 1000px;
  background-repeat: no-repeat;
  padding: 15px;
}
	.container1 {
  position: relative;
  text-align: center;
  color: white;
}
	.container4 {
  position: relative;
  text-align: center;
  color: black;
}

.bottom-left {
  position: absolute;
  bottom: 55px;
  left: 225px;
}

.top-left {
  position: absolute;
  top: 0px;
  left: 16px;
font-size: 25px;
}

.top-right {
  position: absolute;
  top: -145px;
  right: 85px;
}

.bottom-right {
  position: absolute;
  bottom: 90px;
  right: 135px;
}

.centered {
  position: absolute;
  bottom: 30px;
  right: 135px;
}

	.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: auto;
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
    <a href="https://siliconroboticsclub.000webhostapp.com/index_Upload.php">Profile</a>
	<a href="https://webchat.snatchbot.me/936485290a63062282ff3a36079a4d638b685cc2a6f41f8a2d47336f1fccd6d2">Notify</a>
    <a href="https://siliconroboticsclub.000webhostapp.com/Logout.php">Logout</a>
  </div>
</div>
</div></div>
<div class="container1">
	<h1 div class="top-left">Silicon Robotics Club</h1></div>
</div>
	<img src="header.jpg"  width="415" height="50">


	<div id="example1">
	
	  <form><center>
     <img src="jas1234.jpg" onclick="about_Us()" width="330" height="185" alt=""/>
	<div class="container4">
	<center><h3 div class="bottom-right">About Us</h3></center>
	</div>
	
	  </br>
	
     <img src="front1.jpg" onclick="send_otp()" width="330" height="175" alt=""/>
	<div class="container4">
	<h3 div class="bottom-left">Website</h3>
	</div>
    
	</br>
	 
     <img src="robot-calling.jpg" onclick="submit_otp()" width="330" height="175" alt=""/>
		  <div class="container4">
	<h3 div class="top-right">Query</h3>
	</div>
    </form>
	</br>
	 
     <img src="name1.jpg" onclick="developer()" width="330" height="175" alt=""/>
		
		<div class="container4">
	<h3 div class="centered">Developer</h3>
	
	</div>
</center>
    </form>
</div>

  <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(106239)</script>        
 <script>

function about_Us(){
	jQuery.ajax({
		success:function(){
				window.location='https://siliconroboticsclub.000webhostapp.com/coordinator.php'
		}
	});
	}
function send_otp(){
	jQuery.ajax({
		success:function(){
				window.location='https://application3solutions.wordpress.com'
		}
	});
	}

function submit_otp(){
	jQuery.ajax({
		success:function(){
				window.location='https://siliconroboticsclub.000webhostapp.com/Query_form.php'
		}
	});
	}
function developer(){
	jQuery.ajax({
		success:function(){
				window.location='https://siliconroboticsclub.000webhostapp.com/Developer1.php'
		}
	});
	}

	function myFunction(x) {
  x.classList.toggle("change");
}
</script>
<style>
.second_box{display:none;}
.field_error{color:red;}
</style>
</body>
</html>                                		                            