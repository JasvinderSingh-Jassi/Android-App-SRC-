<?php


define('HOST', 'localhost');
define('USER', 'id13357506_jassi1997');
define('PASSWORD', 'J@svindersingh1997');
define('DB', 'id13357506_register_user');


$con = mysqli_connect(HOST, USER, PASSWORD, DB) or die("Unable to Connect");


$query = "SELECT * FROM user_register";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result)) {
 
	$flag[] = $row;
}
 
print(json_encode($flag));

mysqli_close($con);
?>
