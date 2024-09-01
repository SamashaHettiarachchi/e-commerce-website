<!DOCTYPE html>
<html>
<head>
  <title>Nikestore - Contact Us</title>
  <style>
    body {
  margin: 0;
  padding: 0;
  background-color: black;
  color: white;
  font-family: Arial, sans-serif;
}

header {
  background-color: black;
  color: white;
  padding: 5px;
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
  text-align:center;
}

p {
  font-size: 16px;
  margin-bottom: 10px;
}

form {
  display: flex;
  flex-direction: column;
  width: 50%;
  margin: 0 auto;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

#id2{
  padding: 10px;
  border-radius: 10px;
}

#id1 li{
  padding-left: 110px;
  padding-right: 110px;
}

#id2 li{
  float: none;
}

footer{
  color: orange;
  background-color: #333; 
  padding: 20px; 
  text-align: center; 
  margin-top: 100px;
}
h1{
  padding:0px;
  margin-left:100px;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}



  </style>
</head>
<body>
  <header>
    <h1>Thank You!</h1>
  </header>
  <nav>
    <ul id="id1">
      <li><a href="shop.php">Home</a></li>
      <li><a href="shop.php">Shop</a></li>
      <li><a href="contact.php">Contact</a></li> 
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
  <main>
    <section>
      <h2>Thanks for your Response</h2>
      <img src= https://getwallpapers.com/wallpaper/full/2/3/b/1083135-large-tech-n9ne-wallpapers-1920x1200-for-tablet.jpg 
						alt="thanks" height=300px width="500px" class="center"> 

      <hr>
      <h3>Other Contact Information</h3>
      <ul id="id2">
        <li>Email: contact@nikestore.com</li>
        <li>Phone: +94 112565532</li>
        <li>Address: 123 Main Street, colombo 7</li>
      </ul>
    </section>
  </main>
  <footer>
    <p>&copy; 2024 Nikestore</p>
  </footer>
</body>
</html>