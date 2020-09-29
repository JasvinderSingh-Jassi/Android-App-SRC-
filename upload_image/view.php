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
	<title></title>

	<!-- boostrap css-->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	
	
	
	
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
top: 30px;
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
top: 145px;
  left: 152px;
	font-size: 25px;
}
	.top-left1 {
  position: absolute;
  top: -5px;
  left: 130px;
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
    
  </div>
</div>
</div></div>
<div class="container1">
	<h1 div class="top-left">Silicon Robotics Club</h1>
</div>
	<img src="header.jpg"  width="415" height="50">
	</br>
	
	
	
	
	
	
	
	

<br /> <br /> <br />
<div class="col-md-5 col-sm-5 col-md-offset-4 col-sm-offset-4">
	<a href="index_Upload.php" class="btn btn-default">Back</a>
	<table class="table table-bordered">
		<tr>
			<th>S.no</th>
			<th>Name</th>
			<th>Photo</th>
		</tr>

		<?php 
		// database connection
		$server = 'localhost';
		$username = 'id13357506_jassi1997';
		$password = 'J@svindersingh1997';
		$dbname = 'id13357506_register_user';

		$conn = new mysqli($server, $username, $password, $dbname);

		// check db connection
		if($conn->connect_error) {
			die("Connection Failed : " . $conn->connect_error);
		} 
		else {
			// echo "Successfully Connected";
		}

		$sql = "SELECT * FROM users";
		$query = $conn->query($sql);

		$x = 1;
		while ($result = $query->fetch_assoc()) {
			$image = substr($result['image'], 3);

			echo "<tr>
				<td><br>".$x.".</td>
				<td><br>".$result['name']."</td>
				<td> <img src='".$image."' style='height:100px; width:100px;' /> </td>
			</tr>";
			$x++;
		}

		?>
	</table>
</div>
		<script>
			function myFunction(x) {
  x.classList.toggle("change");
}
			</script>
</body>
</html>