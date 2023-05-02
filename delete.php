<?php
	$connection = mysqli_connect("localhost", "root", "", "users_db");
				
		if(isset($_POST['submit'])){
			$email = mysqli_real_escape_string($connection, $_POST['email']);
			$password = mysqli_real_escape_string($connection, $_POST['password']);
					
			$query = "SELECT * FROM user_registration WHERE email='$email' AND password='$password'";
			$result = mysqli_query($connection, $query);
			$row = mysqli_fetch_assoc($result);
					
			if(mysqli_num_rows($result) == 1) {
					
				$id = $row['id'];
				$delete_query = "DELETE FROM user_registration WHERE id='$id'";
				$delete_result = mysqli_query($connection, $delete_query);
						
					if($delete_result){
						echo "Your data has been deleted successfuly.";
					} else {
						echo "Error.";
					}
					
				} else {
					echo "Incorrect email or password!";
				}
		}
?>