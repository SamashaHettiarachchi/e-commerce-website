<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
	$name = $_POST["name"]; 
	$username = $_POST["username"]; 
	$email = $_POST["email"]; 
	$password = $_POST["password"]; 
	
	$hashed_password = password_hash($password, PASSWORD_BCRYPT); 
	$host = "sql102.infinityfree.com"; 
	$dbname = "if0_37218477_shp1"; 
	$username_db = "if0_37218477"; 
	$password_db = "Vkvg6JRkwRI"; 
	try { 
		$db = new PDO( 
		"mysql:host=$host;dbname=$dbname", 
			$username_db, $password_db); 
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		
		$stmt = $db->prepare( 
		"INSERT INTO users (name,username,email, password) 
			VALUES (:name, :username, :email,:password)"); 
		$stmt->bindParam(":name", $name); 
		$stmt->bindParam(":username", $username); 
		$stmt->bindParam(":email", $email); 
		$stmt->bindParam(":password", $hashed_password); 
		$stmt->execute(); 
		echo "<script>alert('Registration Successful.Thank you for registering');</script>"; 
		header("refresh:0;url=index.php"); 
	} 
	catch(PDOException $e) { 
		echo "Connection failed: " . $e->getMessage(); 
	} 
} 
?>

<!DOCTYPE html> 
<html> 

<head> 
	<title>Registration Page</title> 
	<link rel="stylesheet"
		type="text/css"
		href="style.css"> 
</head> 

<body> 
	<div class="container"> 
		<h1>Registration Page</h1> 
		<form method="post" action="register.php"> 
			<label for="name"> 
				Name: 
			</label> 
			<input type="text"
				id="name"
				name="name" required> 

			<label for="username"> 
				Username: 
			</label> 
			<input type="text"
				id="username"
				name="username" required> 

			<label for="email">Email:</label> 
			<input type="email"
				id="email"
				name="email" required> 

			<label for="password">Password:</label> 
			<input type="password"
				id="password"
				name="password" required> 

			<input type="submit"
				value="Register"> 
		</form> 
		<p> Already have an account?</p> 
		<a href="index.php">Click Here</a> 
	</div> 
	<br> 
</body> 

</html>
