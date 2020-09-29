<?php
session_start();
$_SESSION['isloggedout']="true";
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

.container4 {
  position: relative;
  text-align: center;
  color: white;
top: 250px;
  left: -10px;
}
	
	.container5 {
  position: relative;
  text-align: center;
  color: white;
top: 0px;
  left: 0px;
}
.container6 {
  position: absolute;
  text-align: center;
  color: black;
top: 250px;
  left: 70px;
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
  width: 300px;
  height: 300px;
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
</style>

</head>
<body>
	
<div class="container4">
	<img src="logo.png" alt="Avatar" class="avatar">
	<p class="container6"><I><B>You are now successfully</br>Logged Out!</B></I></p>
	
	</div>
</body>
</html>                                		                            