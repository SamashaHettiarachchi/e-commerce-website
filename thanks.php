<html> 

<head> 
	<style> 
		body { 
			background-color: black; 
			font-family: Arial, sans-serif; 
		} 
		
		h1 { 
			color: white; 
			font-size: 2.5em; 
			text-align: center; 
			margin-top: 50px; 
		} 
		
		p { 
			color: white; 
			font-size: 1.2em; 
			text-align: center; 
			margin-top: 20px; 
		} 

		img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top:100px;
}

		
		
	</style> 
</head> 
<body>
<img src= "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/0429ebc5-5e13-424c-9b3f-9cddf224239a/dbkx6ar-e3556049-ee5c-49cc-b657-d4ba446cde7d.png/v1/fill/w_1024,h_578,q_75,strp/thank_you___red_by_elrotha-dbkx6ar.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwic3ViIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl0sIm9iaiI6W1t7InBhdGgiOiIvZi8wNDI5ZWJjNS01ZTEzLTQyNGMtOWIzZi05Y2RkZjIyNDIzOWEvZGJreDZhci1lMzU1NjA0OS1lZTVjLTQ5Y2MtYjY1Ny1kNGJhNDQ2Y2RlN2QucG5nIiwid2lkdGgiOiI8PTEwMjQiLCJoZWlnaHQiOiI8PTU3OCJ9XV19.C_wh0a8yoLLi9ciGHxW3UtGeqSo8AVB3v1dI-HOGG7Q "
						alt="thanks" height=300px width="500px" class="center">
</body>


<?php 
	session_start(); 

	if (isset($_SESSION['user'])) { 
		$user = $_SESSION['user']; 
		$customerName = $user['name']; 
	} else { 
		$customerName = "Valued Customer"; 
	} 

	echo "<h1>Thank You, $customerName!</h1>"; 
	echo
"<p>Your order has been received and will be delivered soon.</p>"; 
	?> 
</html>