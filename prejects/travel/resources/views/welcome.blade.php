<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Website</title> 
   </head> 
<body>
  <?php require_once 'header.html';?>
  <?php include  'code.php'; ?>  
  
   <!-- <form action="index.php">
      <input type="text" placeholder="Search.." name="search" id="searchInput">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form> -->
<main>
<section class="attributes">
  <div class="icons" onmouseover="changeStyle()">
    <i class="fas fa-tree"></i>
    <p>Natura</p> 
  </div>
  <div class="icons" onmouseover="changeStyle()">
    <i class="fab fa-fort-awesome"></i>
    <p>Natura</p>
  </div>
  <div class="icons" onmouseover="changeStyle()">
    <i class="fas fa-mountain"></i>
    <p>Natura</p> 
  </div>
  <div class="icons" onmouseover="changeStyle()">
    <i class="fas fa-landmark"></i>
    <p>Natura</p>
  </div>
</section>


<aside class="principal">
<div class="container"> 
<h2> Explorează <span style="color: #55D6BE">România:</span> <br> O călătorie într-un paradis natural!</h2>
<p>  Indiferent dacă ești un călător experimentat sau doar îți dorești o evadare <br> de la rutina zilnică, ai ajuns în locul potrivit. </p> 

<button class="button button1" onclick="window.location.href='complaint.php';">Visit Complaint Page</button>
<button class="button button2" onclick="window.location.href='contact.php';">Visit Contact Page</button>
  </div>


<section>
<div class="image">
<img src="/travel-website/images/01.jpeg" style=" width: 600px; height:300px;"> 
</div>
</section> 
</aside> 

<section class="destinations"> 
  <h2> Destinații de explorat</h2>
  <div class="gallery">
    <div class="city" id="Bucharest">
      <a href="bucharest.php"
        ><img src="/travel-website/images/bucuresti.jpeg" alt="Bucuresti"
      /></a>
    </div>
    <div class="city" id="Bravov">
      <a href="brasov.php" onclick="cityName">
        <img src="/travel-website/images/brasov.jpeg" alt="Brasov"
      /></a>
    </div>
    <div class="city" id="Sibiu">
      <a href="sibiu.php"
        ><img src="/travel-website/images/sibiu.jpeg" alt="Sibiu"
      /></a>
    </div>
    <div class="city" id="`Cluj-Napoca`">
      <a href="cluj-napoca.php"
        ><img src="/travel-website/images/cluj.jpeg" alt="Cluj Napoca"
      /></a>
    </div>
    <div class="city" id="Timisoara">
      <a href="timisoara.php"
        ><img src="/travel-website/images/timisoara.jpeg" alt="Timisoara"
      /></a>
    </div>
    <div class="city" id="Iasi">
      <a href="iasi.php"
        ><img src="/travel-website/images/iasi.jpeg" alt="Iași"
      /></a>
    </div>
    <div class="city" id="Constanta">
      <a href="constanta.php"
        ><img src="/travel-website/images/constanta.jpeg" alt="Constanța"
      /></a>
    </div>
    <div class="city" id="Alba-Iulia">
      <a href="alba-iulia.php"
        ><img src="/travel-website/images/alba-iulia.jpeg" alt="Alba Iulia"
      /></a>
    </div>
    <div class="city">
      <a href="sighisoara.php"
        ><img src="/travel-website/images/sighisoara.jpeg" alt="Sighisoara"
      /></a>
    </div>
    <div class="city" id="Oradea">
      <a href="oradea.php"
        ><img src="/travel-website/images/oradea.jpeg" alt="Oradea"
      /></a>
    </div>
  </div>
</section>

<section class="contact">
	<form action="contact.database.php" method="get">
		<label for="nume">Nume:</label>
		<input type="text" name="firstName" required><br>

		<label for="prenume">Prenume:</label>
		<input type="text" name="lastName" required><br>

		<label for="telefon">Număr de telefon:</label>
		<input type="tel" name="phone" required><br>

		<label for="mesaj">Mesaj:</label>
		<textarea id="mesaj" name="message" required></textarea><br>

		<input type="submit" name = "submitContact" value="Submit">
	</form>
</section>
</main> 

 

<!-- <dl>
  <dt>Date</dt>
  <dd><?php var_dump($data)?></dd>
  <dt>IP Adress</dt>
  <dd><?php Echo $ipaddress; ?></dd>
  <dt>IP Adress</dt>
  <dd><?php Echo $ipaddress; ?></dd>
  <dt>Access Number</dt>
  <dd><?php Echo $_SESSION['numar_accesari']; ?></dd>
</dl>
</body> -->

<script src="js.js"></script>
<?php require_once 'footer.html';?>
</body>
</html>