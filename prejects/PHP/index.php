
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
    <title>Website</title> 
   </head> 
<style>

ul {
  list-style-type: none;
  margin: 0px;
  padding: 10px;
  overflow: hidden;
  background-color: #55D6BE;
}

li {
  float: left;
  
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.hero-image {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  object-fit: contain;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.hero-text {
  text-align: center;
  position: absolute;
  font-size: 60px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  text-shadow: 1px 1px 1px black;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: white;
  background-color: #7DC6B6;
  text-align: center;
  cursor: pointer;
}

.hero-text button: hover {
  background-color: #555;
  color: white;
}

H1, H2 {
font-size: 36px;
}

p {
font-size: 19px;    
color: #869ab8ff;
}

main { 
margin:70px;
padding: 30px; 
display: grid; 
grid-template-columns: 60% 40%;    
}

content {
margin:60px;
padding: 20px;
display: grid;
grid-template-columns: 30% 30% 30%;
justify-content: space-between;
}

.button1 {  
background-color: #55D6BE;
color: white;
border: none;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 15px;
border-radius: 5px;
}

.button2 {  
background-color: #D5F5EF;
color:  black;
border: none;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 15px;
border-radius: 5px;
}

footer {
margin:60px;
padding: 20px; 
display: inline-flex;    
}
</style>

<body>

<!-- Nav Bar -->
<ul>
    <li><a href="#"><img src="./images/logo.png" width="60" height="25" alt="logo"></a></li>
    <li><a href="contact.html"> Contact</a></li>
    <li><a href="complaint.html"> Complaint</a></li>
    <li><a href="tel:+40756787456">Call us</a></li>
    <li><a href="#"> Data: <?php var_dump($data)?> </a></li>
    <li><a href="#"> IP Adress: <?php Echo $ipaddress; ?> </a></li>
</ul>

 <!-- Hero image -->
 <div class="hero-image">
    <img src ="./images/hero-lake.png" alt="hero image"/>
  <div class="hero-text">
    <h1>Find your next dream destination</h1>
    <button>Descover more</button>
  </div>
</div>     


<header>

</header>

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

<content>
<info1>
<h3> Built for developers <i class="bi bi-code"></i></h3>
<p>Landkit is built to make your life easier.<br> Variables, build tooling, documentation,<br>and reusable components.</p>   
</info1>

<info2>   
<h3>Designed to be modern</h3>
<p>Designed with the latest design trends in<br> mind. Landkit feels modern, minimal,<br>and beautiful.</p>
</info2>

<info3>
<h3>Documentation for everything</h3>
<p>We've written extensive documentation<br>for components and tools, so you never<br>have to reverse engineer anything.</p> 
 </info3>
</content>


<footer>
 <div style="order:2;"> Contact</div>
<div style="order:1;"> Product List</div> 
<div style="order:3;"> Certification </div>      
</footer>   