<?php 
session_start();
if($_POST) {
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

	$valid = array('success' => false, 'messages' => array());

	$name = $_POST['fullName'];
    $email = $_POST['email'];
	
	$type = explode('.', $_FILES['userImage']['name']);
	$type = $type[count($type) - 1];
	$url = '../uploads/' . uniqid(rand()) . '.' . $type;

	if(in_array($type, array('gif', 'jpg', 'jpeg', 'png'))) {
		if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
			if(move_uploaded_file($_FILES['userImage']['tmp_name'], $url)) {

				// insert into database
				$res=mysqli_query($conn,"select * from user_register where email='$email'");
				$count=mysqli_num_rows($res);
				if($count>0){
					
				$sql = "INSERT INTO users (name, image, email) VALUES ('$name', '$url','$email')";

				if($conn->query($sql) === TRUE) {
					$insertedId=$conn->insert_id;
					$valid['success'] = true;
					$valid['messages'] = "Successfully Uploaded";
				} 
				else {
					$valid['success'] = false;
					$valid['messages'] = "Profile Already Exists";
				}
				}
				else{
					$valid['success'] = false;
					$valid['messages'] = "Email Does'nt Exists";
				}
				
				$conn->close();

			}
			else {
				$valid['success'] = false;
				$valid['messages'] = "Error while uploading";
			}
		}
	}

	echo json_encode($valid);

	// upload the file 
}