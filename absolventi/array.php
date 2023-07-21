<?php

require_once 'Absolvent.php';

$lastname = ["Popescu", "Ionescu", "Georgescu", "Dumitru", "Stoica", "Vasilescu", "Stanescu", "Dragomir", "Marinescu", "Preda", "Radu", "Costache", "Munteanu", "Diaconu", "Dima", "Petrescu", "Tudor", "Popa", "Moldovan", "Ciobanu", "Andrei", "Vlad", "Gheorghe", "Luca", "Nistor", "Enache", "Grigore", "Mihalache", "David", "Toma", "Stan", "Marin", "Barbu", "Constantinescu", "Manea", "Badea", "Chiriac", "Negru", "Bucur", "Sandu", "Nastase", "Turcu", "Paun", "Filip", "Lazar", "Fodor", "Tudose", "Balan", "Lungu", "Fratila", "Luca", "Rosu", "Dan", "Draghici", "Stefanescu", "Radulescu", "Babu", "Gabor", "Muresan", "Dumitrache", "Farcas", "Ivan", "Nica", "Soare", "Davidescu", "Dragan", "Stoian", "Voicu", "Antonescu", "Cojocaru", "Lupu", "Manea", "Oprisan", "Ardelean", "Bojin", "Dobre", "Farcas", "Iacob", "Lazarescu", "Milea", "Musat", "Nicola", "Paunescu", "Popovici", "Popov", "Raducanu", "Rosca", "Tanase", "Toader", "Zavoi", "Iorga", "Vladut", "Stanciu", "Micu", "Sava", "Barsan", "Dobrin", "Burlacu", "Muntean", "Cimpean"]; 

$firstname = ["Alina", "Alexandra", "Andrei", "Elena", "Mihai", "Ion", "George", "Maria", "Ana", "Diana", "Gabriel", "Andreea", "Cristina", "Razvan", "Iulia", "Adrian", "Vlad", "Denisa", "Raluca", "Marius", "Ioana", "Alexandru", "Andra", "Mihaela", "Florin", "Vladimir", "Alina", "Catalin", "Laura", "Darius", "Bogdan", "Ciprian", "Monica", "Mara", "Dumitru", "Irina", "Roxana", "Cristian", "Simona", "Valentin", "Valeria", "Ilinca", "Silvia", "Andi", "Emil", "Paul", "Oana", "Kira", "Cezar", "Dana", "Marcel", "Sebastian", "Stefan", "Teodora", "Dorin", "Ionut", "Mirela", "Mirela", "Octavian", "Paula", "Anca", "Antonia", "Dan", "Florina", "Francisc", "Gina", "Ionela", "Marius", "Nicoleta", "Patricia", "Robert", "Sorin", "Andra", "Camelia", "Eduard", "Gabriela", "Ileana", "Marian", "Marta", "Melania", "Nicolae", "Ovidiu", "Adina", "Alexandrina", "Alexia", "Emanuela", "Madalina", "Raluca", "Rares", "Valeria", "Vali", "Viorel", "Viviana", "Bianca", "Cristian", "Ioan", "Magdalena", "Tudor"]; 

$company = ["Microsoft", "Apple", "Amazon", "Facebook", "Google", "Twitter", "Netflix", "Tesla", "Uber", "Airbnb", "Nike", "Adidas", "Coca-Cola", "PepsiCo", "BMW", "Mercedes-Benz", "Volkswagen", "Toyota", "Samsung", "LG"];


$listaabsolventi = [];
$numeAbsolventi = [];

function numeUnic($varNumeUnic, $numeAbsolventi){
  if (array_search($varNumeUnic, $numeAbsolventi)){

    $name = $firstname[array_rand($firstname)];
    $surname = $lastname[array_rand($lastname)];
    $varNumeUnic = $name. ',' .$surname; 
    if (array_search($varNumeUnic, $numeAbsolventi)){
    numeUnic($varNumeUnic, $numeAbsolventi); 
   }
    
  }
  return $varNumeUnic;
}

for ($i=0; $i<100; $i++){

  if(!empty($listaabsolventi)){
    foreach($listaabsolventi as $absolvent){

      $numeAbsolventi[] = $absolvent->name. ',' .$absolvent->surname; 

    }

  }

  // var_dump($firstname);
  $name = $firstname[array_rand($firstname)]; 
//   if (($key = array_search($name, $firstname)) !== false) {
//     unset($firstname[$key]);
// } 

// var_dump($firstname);
  $surname = $lastname[array_rand($lastname)];
//   if (($key = array_search($surname, $lastname)) !== false) {
//     unset($surname[$key]);
// } 

$varNumeUnic = $name. ',' .$surname;

$varNumeUnic = explode(',',numeUnic($varNumeUnic, $numeAbsolventi));
$name = $varNumeUnic[0];
$surname = $varNumeUnic[1]; 

  $age = rand(18,55);
  $dataabsolvirii = rand(2009,2022);
  $notafinala = rand(5,10);
  $totalincasari = rand(500,1500);
  $employer = $company[array_rand($company)];

  $listaabsolventi[] = new Absolvent($name, $surname, $age, $dataabsolvirii, $notafinala, $totalincasari, $employer);

}

echo "<pre>";
print_r($listaabsolventi);
