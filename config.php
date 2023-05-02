<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$userName = $_POST['userName'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	
	$conn = new mysqli('localhost','root','','users_db');
	if($conn->connect_error){
		die('Connection Failed : ' .$conn->connect_error);
	}else{
		$stmt = $conn->prepare("INSERT INTO user_registration(email, password, userName, firstName, lastName) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss",$email, $password, $userName, $firstName, $lastName);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration Successful";
		$stmt->close();
		$conn->close();
	}
?>

<html>
<body>
<a href="index.html">BACK TO HOME</a>
</body>
</html>