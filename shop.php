<?php 
session_start(); 

if (isset($_POST["add_to_cart"])) { 
	
	$product_id = $_POST["product_id"]; 
	
	$product_quantity = $_POST["product_quantity"]; 

	if (!isset($_SESSION["cart"])) { 
		$_SESSION["cart"] = []; 
		header("location:cart.php"); 
	} 

	$_SESSION["cart"][$product_id] = $product_quantity; 
	header("location:cart.php"); 
} 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title>Nikestore</title>
		<style>

			body { 
				margin: 0; 
				padding: 0; 
				background-color: black; 
				color: white; 
				font-family: Arial, sans-serif; 
			} 

			header { 
				text-align: center;
				background-color: black; 
				color: white; 
				padding: 20px; 
			} 

			footer { 
        background-color: #333; 
        color: orange; 
        padding: 20px; 
        text-align: center; 
    }

			
			main { 
				max-width: 1200px; 
				margin: 0 auto; 
				padding: 20px; 
			} 

			section { 
				margin-bottom: 20px; 
			} 

			h2 { 
				font-size: 32px; 
				margin-top: 0; 
			} 

			ul { 
				list-style: none; 
				margin: 0; 
				padding: 0; 
				display: flex; 
				flex-wrap: wrap; 
			} 

			
			ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li{
	padding-left: 200px;
}

li a {
  display: block;
  color: rgb(188, 18, 18);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

			h3 { 
				font-size: 24px; 
				margin-top: 0; 
			} 

			img { 
				max-width: 200px; 
				height: 200px; 
				margin-bottom: 10px; 
				border-radius: 20px;
			} 

			button { 
				background-color: rgb(188, 18, 18); 
				color: white; 
				border: none; 
				padding: 10px; 
				cursor: pointer; 
			}

			#name{
				padding:100px;
				padding-right:110px;
				border-radius: 20px;
			}

			#name li{

            padding:10px;
			margin:40px;
			}

		</style>
	</head> 
	<body> 
		<header> 
			<h1>Welcome <?php 
			$user = $_SESSION["user"]; 
			echo $user["name"]; 
			?> to <span style="color: rgb(188, 18, 18)">Nikestore</span></h1> 
		</header> 
		<nav> 
			<ul> 
				<li><a href="shop.php">Home</a></li> 
				<li><a href="shop.php">Shop</a></li> 
				<li><a href="contact.php">Contact</a></li>  
				<li><a href="logout.php">Logout</a></li> 
				

			</ul> 
		</nav> 
		<main> 
			<section> 
				<h2>Products</h2> 
				<ul id="name"> 
					<li> 
						<h3>AIR FORCE</h3> 
						<img src= 
						https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/439a67eb-a6c7-4560-8730-7ecb33d41f00/air-force-1-07-mens-shoes-hK5NzM.png
							alt="Product 1"> 
						<p>Timeless style for everyday wear</p> 
						<p><span>$60</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="1"> 
							<label for="product1_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product1_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 
					<li> 
						<h3>AIR JORDAN</h3> 
						<img src= 
						https://static.nike.com/a/images/t_prod_ss/w_640,c_limit,f_auto/73682086-2e6b-4ce1-b2be-ce0f97a27442/air-jordan-4-industrial-blue-fv5029-141-release-date.jpg
							alt="Product 2"> 
						<p>Effortless style for on-the-go </p> 
						<p> 
							<span>$50</span> 
						</p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="2"> 
							<label for="product2_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product2_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart 
						</button> 
						</form> 
					</li> 
					<li> 
						<h3>BLAZER</h3> 
						<img src= 
						https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/5df4241e-3f60-4a65-8ff7-4a71548f48b8/blazer-mid-77-little-kids-shoes-Bnnf4k.png
							alt="Product 3"> 
						<p>Stay cool and comfortable</p> 
						<p> 
							<span>$70</span> 
						</p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="3"> 
							<label for="product3_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product3_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart 
							</button> 
						</form> 
					</li> 
					<li> 
						<h3>CRATER</h3> 
						<img src= 
						https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/33b3b984-91c2-4305-8a6f-442f936694f2/crater-impact-womens-shoes-zztfgM.png
							alt="Product 1"> 
						<p>Conquer any terrain </p> 
						<p><span>$100</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="4"> 
							<label for="product4_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product4_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 
					<li> 
						<h3>HIPPIE</h3> 
						<img src= 
						https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/afe1af10-af14-4de8-8376-3d4931b3cf07/infinityrn-4-mens-road-running-shoes-hlqHFQ.png
							alt="Product 2"> 
						<p>Elevate your streetwear game </p> 
						<p> 
							<span>$55</span> 
						</p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="5"> 
							<label for="product5_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product5_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart 
						</button> 
						</form> 
					</li> 
					<li> 
						<h3>AIR MAX</h3> 
						<img src= 
						https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/63e0cf2c-a805-401e-bd8f-cbe1e28115ab/air-max-dn-shoes-27XkSQ.png
							alt="Product 3"> 
						<p>Black Color Stylish Hoodie</p> 
						<p> 
							<span>$69</span> 
						</p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="6"> 
							<label for="product6_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product6_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart 
							</button> 
						</form> 
					</li> 
					<li> 
						<h3>NIKE DUNK</h3> 
						<img src= 
						https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/6a063392-478e-4ac1-a4f8-39738abc7751/dunk-low-retro-mens-shoes-76KnBL.png
							alt="Product 1"> 
						<p>Add a pop of color to lifestyle</p> 
						<p><span>$79</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="7"> 
							<label for="product7_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product7_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 
					<li> 
						<h3>NIKE PEGASUS</h3> 
						<img src= 
						https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/8e73327a-91d7-4ab6-8470-7bc646ddad09/pegasus-trail-5-mens-trail-running-shoes-0ZrZ4D.png
							alt="Product 2"> 
						<p>Stay warm and stylish </p> 
						<p> 
							<span>$109</span> 
						</p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="8"> 
							<label for="product8_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product8_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart 
						</button> 
						</form> 
					</li> 
					<li> 
						<h3>NIKE ZEGAMA</h3> 
						<img src= https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/dbc0d165-84e4-4159-b9d1-d05b3a19d169/zegama-2-mens-trail-running-shoes-fZw18h.png
							alt="Product 3"> 
						<p>Sophisticated shoe for occasion</p> 
						<p> 
							<span>$39</span> 
						</p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="9"> 
							<label for="product9_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product9_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart 
							</button> 
						</form> 
					</li> 
					
				</ul> 
			</section> 
		</main> 
		<footer> 
			<p>&copy; 2024 Nikestore</p> 
		</footer> 
		<script src="shop.php"></script> 
	</body>
</html>