
<?php
session_start();
// Declarare variabila timp
$timp = time();
// var_dump($timp);

date_default_timezone_set('Europe/Bucharest');
$data = date('d-M-Y H-i', time());

// Declarare variabila pentru determinarea IP Adress
$ipaddress = $_SERVER['REMOTE_ADDR'];  

// Afisarea numarului de accesari al unui utilizator 

$_SESSION['numar_accesari'] = ($_SESSION['numar_accesari'] ?? 0) + 1;

?>
