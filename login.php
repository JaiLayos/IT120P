<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$con = new mysqli("localhost","root","","users_db");
	if($con->connect_error){
		die("Failed to connect : ".$con->connect_error);
	} else {
		$stmt = $con->prepare("SELECT * FROM user_registration WHERE email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if($data['password'] === $password) {
				echo "<h2>Welcome </h2>";
			} else {
				echo "<h2>Invalid email or password</h2>";
			}
		} else {
			echo "<h2>Invalid email or password</h2>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Air Pollution Parametric System</title>
<link rel="stylesheet" href="styles.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cherry+Cream+Soda&family=Poppins:wght@300&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/d358970a21.js" ></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chewy&family=Josefin+Sans&family=Yeseva+One&display=swap" rel="stylesheet">
<script src="script.js"></script>

</head>
<script src="script.js"></script>
<body>
	<div class="left">
		<img src="assets/logo.png" class="logo">
		<div class="quote">
			<h3>For an excellent <br> air quality</h3>
		</div>
		<div class="nav">
			<img src="assets/home.png" class="homeicon">
			<a href="index.html"><h2 class="navtext">HOME</h2></a>
			</div>
		<div class="nav">
			<img src="assets/profile.png" class="proficon">
			<a href="profile.html"><h2 class="navtext">PROFILE</h2></a>
		</div>
		<div class="nav">
			<img src="assets/you area.png" class="yAreaicon">
			<a href="yourarea.html"><h2 class="navtext">YOUR AREA</h2></a>
		</div>
		<div class="nav">
			<img src="assets/faqs.png" class="faqsicon">
			<a href="FAQs.html"><h2 class="navtext">FAQS</h2></a>
		</div>
		<div class="nav">
			<img src="assets/register.png" class="loginicon">
			<a href="login.html"><h2 class="navtext">LOGIN</h2></a>
		</div>
		<div class="nav">
			<img src="assets/register.png" class="regisicon">
			<a href="register.html"><h2 class="navtext">REGISTER</h2></a>
		</div>
	</div>
	<div class="register-panel">
		<div class="register-form">
			<p class="register-label"></p>
			<div class="parent">
			<div class="form">
				<?php echo $_GET["firstName"]; ?> <?php echo $_GET["lastName"]; ?><br>
				<label>Username</label>
				<?php echo $_GET["userName"]; ?>
				<label>Email</label>
				<?php echo $_GET["email"]; ?>
				<label class="contact">Contact</label>
				<br>
				<label>First Name</label>
				<label class="lastname">Last Name</label>
				<br>
				<br>
				<div class="TACbtn">
					<div class="rgstr">
						<button class="registerbtn"><p>Logout</p></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html> 