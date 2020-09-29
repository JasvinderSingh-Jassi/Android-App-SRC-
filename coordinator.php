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
		.avatar2 {
  vertical-align: middle;
  width: 38px;
  height: 38px;
  border-radius: 50%;
		position: absolute;
			
  
  left: 2px;
}
	
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
  top: 3.2%;
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
  color: black;
top: 0px;
  left: 0px;
}
.container6 {
  position: absolute;
  text-align: center;
  color: black;
top: 145px;
  left: 152px;
	font-size: 25px;
}
	
	.container10 {
  position: absolute;
  text-align: center;
  color: black;
top: 445px;
  left: 152px;
	font-size: 25px;
}
		.container32 {
  position: absolute;
  text-align: center;
  color: black;
top: -65px;
  left: 1px;
	font-size: 25px;
}
	.container23 {
  position: absolute;
  text-align: center;
  color: black;
top: 55px;
  left: 1px;
	font-size: 25px;
}
.container19 {
  position: absolute;
  text-align: center;
  color: black;
top: 450px;
  left: 210px;
	font-size: 25px;
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
  width: 47px;
  height: 47px;
  border-radius: 50%;
		position: absolute;
  
  left: 2px;
}
img {
  border-radius: 50%;
}
		.top-left11 {
  position: absolute;
  top: 60px;
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
	<div  >
<div class="container1">
	<h1 div class="top-left">Silicon Robotics Club</h1>
</div>
	<img src="header.jpg"  width="415" height="50">
		</br>
	<div class="container8">
	<h1 div class="top-left11"><B><I>About Us</I></B></h1>
</div>
	</br>
</br>
</br>
</br>
<p class="container5"><I><B> Our club helps students to boost out their hidden talents for the advancement of technology in the field of robotics and also encourages them by providing a learning platform in both hardware and software field. Rather our team also conduct several sessions for circuit designing and software enhancement.</B></I></p>

<div class="container4">
<img src="1.jpg" alt="Avatar" class="avatar">
	
	</div>
<div class="container10">
<img src="call.jpg" alt="Avatar" onClick="call()" class="avatar1">
	</div>
<div class="container19">
<a href= "mailto:sagarika.pradhan@silicon.ac.in">
	<img src="email.png" alt="Avatar" class="avatar2"></a>
</div>
</br></br></br>
</br>
	<div class="container5">
		<p class="round3"><img src="women.png" alt="Avatar" class="avatar1"><B>Faculty Incharge</B></br><I>Ms.Sagarika Pradhan</I></p>
<p class="round3"><img src="bio.jpg" alt="Avatar" class="avatar1"><B>Bio</B></br></br>Ms.Sagarika Pradhan works as Assistant Professor in the Department of Mechanical Engineering at Silicon Institiute Of Technology,Sambalpur. She had her Master's from Veer Surendra Sai University Of Technology(VSSUT), Burla. She has been Working at &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Silicon West,Sambalpur since July,2010. She has a wide range of interest in Mechatronics, Robotics, Mechanical Mechanisms and Design & Production Engineering.</p>
<div class="container4">
<img src="name1.jpg" alt="Avatar" class="avatar">
	</div>
<div class="container23">
		<div class="container10">
<img src="call.jpg" alt="Avatar" onClick="call1()" class="avatar1">
			
	</div>
<div class="container19">
<a href= "mailto:jasvinder1997@gmail.com" >
	<img src="email.png" alt="Avatar" class="avatar2"></a>
	</div></div>
</br></br></br>
</br></br>
	<div class="container5">
		<p class="round3"><img src="sardarji.PNG" alt="Avatar" class="avatar1"><B>Secretary</B></br><I>Mr.Jasvinder Singh</I></p>
<p class="round3"><img src="bio.jpg" alt="Avatar" class="avatar1"><B>Bio</B></br></br>I am Jasvinder Singh from SIT Sambalpur(CSE Branch)
I have keen interest in exploring new Technologies related to Robotics and also passionate about Circuit Designing.😊 </p>
<div class="container4">
<img src="3.jpg" alt="Avatar" class="avatar">
	</div>
<div class="container32">
		<div class="container10">
<img src="call.jpg" alt="Avatar" onClick="call2()" class="avatar1">
	</div>
<div class="container19">
<a href= "mailto:biswa1594@gmail.com">
	<img src="email.png" alt="Avatar" class="avatar2"></a>
</div></div>
</br></br></br>
</br>
	<div class="container5">
		<p class="round3"><img src="men.png" alt="Avatar" class="avatar1"><B>Joint Secretary</B></br><I>Mr.Biswa Priyadarshan Swain </I></p>
<p class="round3"><img src="bio.jpg" alt="Avatar" class="avatar1"><B>Bio</B></br></br>I am Biswa from SIT Sambalpur (CSE Branch). </br>&nbsp;&nbsp; Like to learn technology and
Love to spend time with robots.😊 </p>
<div class="container4">
<img src="4.jpg" alt="Avatar" class="avatar">
	</div>
		</br>
	<div class="container5">
		<p class="round3"><img src="men.png" alt="Avatar" class="avatar1"><B>Coordinator</B></br><I>Mr.Bhanu Prakash</I></p>
<p class="round3"><img src="bio.jpg" alt="Avatar" class="avatar1"><B>Bio</B></br></br> I'm Bhanu from SIT Sambalpur(CSE Branch).
Epistemophilic and
Love to know about Robots.  </p>
<div class="container4">
<img src="5.jpg" alt="Avatar" class="avatar">
	</div>
		</br>
	<div class="container5">
		<p class="round3"><img src="men.png" alt="Avatar" class="avatar1"><B>Coordinator</B></br><I>Mr.Niket Nirupam</I></p>
<p class="round3"><img src="bio.jpg" alt="Avatar" class="avatar1"><B>Bio</B></br></br> I'm Niket from SIT Sambalpur(ECE branch).
I have keen interest in Circut Designing and
Love to spend time in Circuit Designing of Microcontroller and Robots. </p>
<div class="container4">
<img src="6.jpg" alt="Avatar" class="avatar">
	</div>
		</br>
	<div class="container5">
		<p class="round3"><img src="men.png" alt="Avatar" class="avatar1"><B>Coordinator</B></br><I>Mr.Tikeshwar Dewangan</I></p>
<p class="round3"><img src="bio.jpg" alt="Avatar" class="avatar1"><B>Bio</B></br></br> I am Tikeshwar Dewangan from 2nd year(ECE Branch).
Running my own IOT based startup and sells Smart Switches and deals with Home Automation problems.&nbsp;&nbsp;
I also Automate the Home in considerable price. </p>
<div class="container4">
<img src="7.jpg" alt="Avatar" class="avatar">
	</div>
		</br>
	<div class="container5">
		<p class="round3"><img src="men.png" alt="Avatar" class="avatar1"><B>Coordinator</B></br><I>Mr.Aniket Shukla</I></p>
<p class="round3"><img src="bio.jpg" alt="Avatar" class="avatar1"><B>Bio</B></br></br>&nbsp;&nbsp; I am Aniket Shukla from SIT Sambalpur(CSE Branch).&nbsp;&nbsp;
&nbsp;&nbsp;I like to learn new Technologies related to Robotics and Develop newer bots using them. </p>
<div class="container4">
<img src="8.jpg" alt="Avatar" class="avatar">
	</div>
		</br>
	<div class="container5">
		<p class="round3"><img src="men.png" alt="Avatar" class="avatar1"><B>Coordinator</B></br><I>Mr.Pankaj Kumar</I></p>
<p class="round3"><img src="bio.jpg" alt="Avatar" class="avatar1"><B>Bio</B></br></br>&nbsp; I am Pankaj Kumar from SIT Sambalpur(CSE Branch).&nbsp;
I possess a zeal to learn Technology, Design and &nbsp;&nbsp;Develop various &nbsp;types of Bots.
I also like to work on the Electrical aspect of Robotics. </p>
<div class="container4">
<img src="9.jpg" alt="Avatar" class="avatar">
	</div>
		</br>
	<div class="container5">
		<p class="round3"><img src="women.png" alt="Avatar" class="avatar1"><B>Coordinator</B></br><I>Ms.Rakshita Tiwari</I></p>
<p class="round3"><img src="bio.jpg" alt="Avatar" class="avatar1"><B>Bio</B></br></br> 
I am Rakshita Tiwari from SIT Sambalpur(CSE Branch), 
Like to learn new Technology and Developing bots by utilizing my Technical Skills,  
I also Love to spend time with Robots to learn some new Technologies & Techniques. </p>
</br>
</br>

<script>
	function myFunction(x) {
  x.classList.toggle("change");
}
	function call() 
	{
		window.open('tel:917008625632'); 
	}
	function call1() 
	{
		window.open('tel:919348142762'); 
	}
	function call2() 
	{
		window.open('tel:917014408064'); 
	}
</script>
</body>
</html>                                		                            