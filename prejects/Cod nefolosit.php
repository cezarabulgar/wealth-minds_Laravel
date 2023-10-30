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