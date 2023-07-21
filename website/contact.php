
<?php
$timp = time();
// var_dump($timp);

date_default_timezone_set('Europe/Bucharest');
$data = date('d-M-Y H-i', time());

$ipaddress = $_SERVER['REMOTE_ADDR'];  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>Contact Information</title> 
   </head> 
<body>

</body>
<!-- Nav Bar -->
<ul>
    <li><a href="#"><img src="./images/logo.png" width="60" height="25" alt="logo"></a></li>
    <li><a href="contact.php"> Contact</a></li>
    <li><a href="complaint.php"> Complaint</a></li>
    <li><a href="tel:+40756787456">Call us</a></li>
    <li><a href="#"> Data: <?php var_dump($data)?> </a></li>
    <li><a href="#"> IP Adress: <?php Echo $ipaddress; ?> </a></li>
</ul>

<header>

 <!-- Hero image -->
 <div class="hero-image">
    <img src ="/images/car.png" alt="hero image"/>
  <div class="hero-text">
    <h1>GET IN TOUCH WITH US</h1>
  </div>
</div>     

</header>

<main>
<aside>
<div class="container"> 
<h2> Let's start a <span style="color: #55D6BE">Conversation</span> <br> You are here for you</h2>
<p> Give us your contact informations and we will reach you as soon as posible.</p> 

<button class="button button1" onclick="window.location.href='index.php';">Back to Home Page</button>
<button class="button button2" onclick="window.location.href='complaint.php';">Visit Complaint Page</button>
</aside>
 
<!-- Get Request  -->
<section>
	<form action="database.php" method="get">
		<label for="nume">Nume:</label>
		<input type="text" id="nume" name="nume" required><br>

		<label for="prenume">Prenume:</label>
		<input type="text" id="prenume" name="prenume" required><br>

		<label for="telefon">Număr de telefon:</label>
		<input type="tel" id="telefon" name="telefon" required><br>

		<label for="mesaj">Mesaj:</label>
		<textarea id="mesaj" name="mesaj" required></textarea><br>

		<input type="submit" value="Submit">
	</form>

   
</div>
</section> 


</html>