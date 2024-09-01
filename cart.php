<!DOCTYPE html> 
<html> 

<head> 
	<title>Shopping Cart</title> 

</head> 
<style> 
	h1{
		text-align: center;
	}

	nav{
		margin-bottom: 50px; 
		}

			ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  padding-left: 150px;
  padding-right: 150px;
}

li a {
  display: block;
  color: red;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}


	body { 
		background-color: black; 
		font-family: Arial, sans-serif; 
	} 
	header, main, footer { 
		background-color: white; 
	} 
	header { 
				background-color: black; 
				color: white; 
				padding: 20px; 
			} 
			
	table { 
		border-collapse: collapse; 
		width: 100%; 
	} 
	th, td { 
		text-align: left; 
		padding: 8px; 
	} 
	th { 
		background-color: #dddddd; 
	} 
	tr:nth-child(even) { 
		background-color: #f2f2f2; 
	} 
	footer { 
		background-color: black;
		margin-top: 348px; 
		background-color: #333; 
        color: orange; 
        padding: 20px; 
        text-align: center; 
	}

			

	
	
	
</style>

<body> 
	<header> 
		<h1><?php session_start(); 
$user = $_SESSION['user']; 
echo $user['name']; ?> Shopping Cart</h1> 
	</header> 

	<nav> 
		<ul> 
			<li> 
				<a href="shop.php">Home</a> 
			</li> 
			<li> 
				<a href="shop.php">Products</a> 
			</li> 
			<li> 
				<a href= "contact.php">Contact Us</a> 
			</li>  
		</ul> 
	</nav> 

	<main> 
		<section> 
			<table> 
				<tr> 
					<th>Product Name </th> 
					<th>Quantity </th> 
					<th>Price </th> 
					<th>Total </th> 
				</tr> 
				<?php 
				$servername = "sql102.infinityfree.com"; 
				$username = "if0_37218477"; 
				$password = "Vkvg6JRkwRI"; 
				$dbname = "if0_37218477_shp1"; 

			
				$conn = 
					new mysqli($servername, $username, $password, $dbname); 

				
				if ($conn->connect_error) { 
					die("Connection failed: " . $conn->connect_error); 
				} 

				$total = 0; 

				
				foreach ($_SESSION['cart'] as $product_id => $quantity) { 
					$sql = "SELECT * FROM products WHERE id = $product_id"; 
					$result = $conn->query($sql); 

					if ($result->num_rows > 0) { 
						$row = $result->fetch_assoc(); 
						$name = $row['name']; 
						$price = $row['price']; 
						$item_total = $quantity * $price; 
						$total += $item_total; 

						echo "<tr>"; 
						echo "<td>$name</td>"; 
						echo "<td>$quantity</td>"; 
						echo "<td>$price $</td>"; 
						echo "<td>$item_total $</td>"; 
						echo "</tr>"; 
					} 
				} 
				
				echo "<tr>"; 
				echo "<td colspan='3'>Total:</td>"; 
				echo "<td>$total $</td>"; 
				echo "</tr>"; 
				?> 
			</table> 
			<form action="checkout.php" method="post"> 
				<input type="submit"
					value="Checkout"
					class="button" /> 
			</form> 
		</section> 
	</main> 

	<footer> 
		<p>&COPY;2024 Nikestore</p> 
	</footer> 
</body> 

</html>
