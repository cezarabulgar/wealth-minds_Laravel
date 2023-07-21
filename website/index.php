
<?php
include  'code.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>Website</title> 
   </head> 

<body>

<!-- Nav Bar -->
<ul>
    <li><a href="#"><img src="./images/logo.png" width="60" height="25" alt="logo"></a></li>
    <li><a href="contact.php"> Contact</a></li>
    <li><a href="complaint.php"> Complaint</a></li>
    <li><a href="tel:+40756787456">Call us</a></li>
    <li><a href="#"> Date: <?php var_dump($data)?> </a></li>
    <li><a href="#"> IP Adress: <?php Echo $ipaddress; ?> </a></li>
    <li><a href="#"> Access Number: <?php Echo $_SESSION['numar_accesari'];?> </a></li>
</ul>

 <!-- Hero image -->
 <div class="hero-image">
    <img src ="/images/hero-lake.png" alt="hero image"/>
  <div class="hero-text">
    <h1>Find your next dream destination</h1>
    <button>Descover more</button>
  </div>
</div>     

<main>
<aside>
<div class="container"> 
<h2> Welcome to <span style="color: #55D6BE">Dream Destinations</span> <br> Discover everything.</h2>
<p> Build a beautiful, modern website with flexible<br> Booststrap components built from scrach. </p> 

<button class="button button1" onclick="window.location.href='complaint.php';">Visit Complaint Page</button>
<button class="button button2" onclick="window.location.href='contact.php';">Visit Contact Page</button>
</aside> 

<section>
<div class="image">
<img src="/images/boat.jpeg" style=" width: 600px; height:300px;"> 
</div>
</section> 
</main>  

<dl>
  <dt>Date</dt>
  <dd><?php var_dump($data)?></dd>
  <dt>IP Adress</dt>
  <dd><?php Echo $ipaddress; ?></dd>
  <dt>IP Adress</dt>
  <dd><?php Echo $ipaddress; ?></dd>
  <dt>Access Number</dt>
  <dd><?php Echo $_SESSION['numar_accesari']; ?></dd>
</dl>

</html>