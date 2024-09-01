<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
	$username = $_POST["username"]; 
	$password = $_POST["password"]; 

	$host = "sql102.infinityfree.com"; 
	$dbname = "if0_37218477_shp1"; 
	$username_db = "if0_37218477"; 
	$password_db = "Vkvg6JRkwRI"; 

	try { 
		$db = new PDO( 
			"mysql:host=$host;dbname=$dbname", 
			$username_db, 
			$password_db
		); 
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 


		$stmt = $db->prepare("SELECT * FROM users WHERE username = :username"); 
		$stmt->bindParam(":username", $username); 
		$stmt->execute(); 
		$user = $stmt->fetch(PDO::FETCH_ASSOC); 

		if ($user) { 
			if (password_verify($password, $user["password"])) { 
				session_start(); 
				$_SESSION["user"] = $user; 

				echo '<script type="text/javascript"> 
	window.onload = function () { 
		alert("Welcome to Nikestore"); 
		window.location.href = "shop.php"; 
	}; 
</script> 
'; 
			} else { 
				echo "<h2>Login Failed</h2>"; 
				echo "Invalid email or password."; 
			} 
		} else { 
			echo "<h2>Login Failed</h2>"; 
			echo "User doesn't exist"; 
		} 
	} catch (PDOException $e) { 
		echo "Connection failed: " . $e->getMessage(); 
	} 
} 
?>

<!DOCTYPE html> 
<html> 

<head> 
	<title>Login Page</title> 
	<link rel="stylesheet"
		type="text/css"
		href="style.css"> 
</head> 

<body> 
	<div class="container"> 
		<h1>Login Page</h1> 
		<form method="post"
			action="index.php"> 
			<label for="username">Username:</label> 
			<input type="text"
				id="username"
				name="username" required> 

			<label for="password">Password:</label> 
			<input type="password"
				id="password"
				name="password" required> 

			<input type="submit"
				value="Login" id="id1"> 
		</form> 
		<br><br> 
		<p> Does not have an account? 
			<a href="register.php">Click Here</a> 
		</p> 
	</div> 
</body> 

</html>
