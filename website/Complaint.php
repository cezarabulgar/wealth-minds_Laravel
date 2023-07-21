
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
    <title>Website</title> 
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
    <img src ="/images/mountain.png" alt="hero image"/>
  <div class="hero-text">
    <h1>Tell us </h1>
  </div>
</div>     

</header>

<main>
<aside>
<div class="container"> 
<h2> Something <span style="color: #55D6BE">Wrong?</span> <br> You are here for you</h2>
<p> Tell us about your problem and we will help you as soon as posible.</p> 

<button class="button button1" onclick="window.location.href='index.php';">Back to Home Page</button>
<button class="button button2" onclick="window.location.href='contact.php';">Visit Contact Page</button>
</aside> 

<!-- Post Request  -->
<section>
	<form action="database.php" method="post">
		<label for="First Name">First Name:</label>
		<input type="text" id="First Name" name="First Name" required><br>

		<label for="Last Name">Last Name:</label>
		<input type="text" id="Last Name" name="Last Name" required><br>

		<label for="Description">Tell us about your complain:</label>
		<textarea id="Description" name="Description" required></textarea><br>

		<input type="submit" value="Submit">
</form>
   
</section> 


</html>







