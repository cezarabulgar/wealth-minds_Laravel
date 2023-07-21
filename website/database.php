<?php

// Get Request 
session_start();

if(isset($_GET['nume']) && isset($_GET['prenume']) && isset($_GET['telefon']) && isset($_GET['mesaj'])) {
    $_SESSION['nume'] = $_GET['nume'];
    $_SESSION['prenume'] = $_GET['prenume'];
    $_SESSION['telefon'] = $_GET['telefon'];
    $_SESSION['mesaj'] = $_GET['mesaj'];

if(isset($_SESSION['nume']) && isset($_SESSION['prenume']) && isset($_SESSION['telefon']) && isset($_SESSION['mesaj'])) {
    echo "<p>Nume: ".$_SESSION['nume']."</p>";
    echo "<p>Prenume: ".$_SESSION['prenume']."</p>";
    echo "<p>Telefon: ".$_SESSION['telefon']."</p>";
    echo "<p>Mesaj: ".$_SESSION['mesaj']."</p>";
    echo "<p>The form has been submitted successfully. <br> Thank you.</p>";   
}
}

// Post Request 
if(isset($_POST['First Name']) && isset($_POST['Last Name']) && isset($_POST['Description'])) {
    $_SESSION['First Name'] = $_POST['nume'];
    $_SESSION['Last Name'] = $_POST['prenume'];
    $_SESSION['Description'] = $_POST['mesaj'];

if(isset($_SESSION['Firt Name']) && isset($_SESSION['Last Name']) && isset($_SESSION['Description'])) {
    echo "<p>FIRST NAME: ".$_SESSION['nume']."</p>";
    echo "<p>LAST NAME: ".$_SESSION['prenume']."</p>";
    echo "<p>DESCRIPTION: ".$_SESSION['mesaj']."</p>";
    echo "<p>The form has been submitted successfully. <br> Thank you.</p>";
}
}

?>

<!DOCTYPE html>
<html>  
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=div, initial-scale=1.0">
<link rel="stylesheet" href="mystyle.css">
<title> Your Complain</title> 
</head> 
<button class="button button1" onclick="window.location.href='index.php';">Back to homepage</button>
</html>

