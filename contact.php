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
  padding: 20px;
}
ul {
  list-style-type: none;
  margin: 0px;
  padding: 10;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
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
  border-radius: 10px;
}
#id1{
  padding: 10px;
  border-radius: 10px;
}

#id1 li{
  float: none;
  display: block;
}

footer { 
        background-color: #333; 
        color: orange; 
        padding: 20px; 
        text-align: center; 
    }
#id2 li{
  padding-left: 150px;
  padding-right:150px;


}
button{
  background-color:  rgb(188, 18, 18);
  color:white;
}

  </style>
</head>
<body>
  <header>
    <h1>Welcome to <span style="color: rgb(188, 18, 18);">Nikestore</span></h1>
  </header>
  <nav>
    <ul id="id2">
      <li><a href="shop.php">Home</a></li>
      <li><a href="shop.php">Shop</a></li>
      <li><a href="contact.php">Contact</a></li>  
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
  <main>
    <section>
      <h2>Contact Us</h2>
      <p>We'd love to hear from you! Feel free to reach out using the form below or the information provided.</p>
      <form id="myForm" method="post" action="contact-form.php">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" placeholder="Enter the subject of your message" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" placeholder="Write your message here" required></textarea>
        <form id="myForm">
            <button type="submit">Send Message</button>
          </form>
          
          <script>
            document.getElementById("myForm").addEventListener("submit", function(event) {
              event.preventDefault();
              window.location.href = "contact-form.php";
            });
          </script>
          
      </form>
      <hr>
      <h3>Other Contact Information</h3>
      <ul id="id1">
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