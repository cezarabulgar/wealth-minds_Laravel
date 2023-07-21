
<?php 
for($a=0; $a<5; $a++){
    echo "*";

    for($b=0; $b<4; $b++){ 
        echo "*";
    }
    echo"<br>";
}

echo"<br>";

for($c=0; $c<5; $c++){
    echo "*";
    
    for($b=0; $b<4; $b++){
        if($c==0 && $b==0){
        echo "2";}
        elseif($c==0 && $b==1){
        echo "3";}
        elseif($c==0 && $b==2){
        echo "4";}
        elseif($c==0 && $b==3){
        echo "5";} 
        elseif($c==1 && $b==1){
        echo "3";}
        elseif($c==1 && $b==2){
        echo "4";}
        elseif($c==1 && $b==3){
        echo "5";}
        elseif($c==2 && $b==2){
        echo "4";}
        elseif($c==2 && $b==3){
        echo "5";}
        elseif($c==3 && $b==3){
            echo "5";}
        
        
        
else { echo"*";}
             
}
echo"<br>";
}

echo"<br>";

for($d=0; $d<3; $d++){
    echo "*";
    
    for($e=0; $e<2; $e++){
        if($d==0 && $e==0){
        echo "2";}
        elseif($d==0 && $e==1){
        echo "3";}
        elseif($d==1 && $e==1){
        echo "3";}
              
else { echo"*";}
             
}
echo"<br>";
}

echo"<br>";



function masuraTriunghi($X, $Y, $Z) {
    if ( $X >$Y+$Z or $Y> $X+$Z or $Z > $Y+$X){ 
        echo "Triunghiul poate fi construit atunci cand X = $X, Y = $Y, si Z = $Z";
    } 
    else {
        echo "Triunghiul nu poate fi construit atunci cand X = $X, Y = $Y si Z = $Z";
    }

}
masuraTriunghi(20, 10, 5); 
echo"<br>";
masuraTriunghi(1,0, 1);
echo"<br>";
masuraTriunghi(2,10, 15); 
echo"<br>";
masuraTriunghi(1,1, 1);
echo"<br>"; 

echo"<br>";


$N1 = 13456; 
$N2 = 12345;

if ($N1>$N2){ 
    echo "N1 = $N1 este mai mare decat N2 = $N2";
} else { 
    echo "N2 ste mai mare decat N1";}

echo"<br>";
echo"<br>";

$B1 = 5;
$B2 = 10;
$B3 = 10;

if ($B2<$B1 && $B1>$B3){ 
    echo "Cel mai mare numar dintre $B1, $B2, $B3 este $B1";
} 
elseif ($B1<$B2 && $B2>$B3){ 
    echo "Cel mai mare numar dintre $B1, $B2, $B3 este $B2";
}
elseif ($B1<$B3 && $B3>$B2){ 
    echo "Cel mai mare numar dintre $B1, $B2, $B3 este $B3";
}

echo"<br>";
echo"<br>";

echo "Ciclu format cu FOR <br>";

for($i=0; $i<3; $i++){
    echo "Exercitiul 3 <br>";
}

echo"<br>";
echo"<br>";

echo "Ciclu format cu While <br>";
$R=3;
while ($R<6){
    echo "Exercitiul 3 <br>";
    $R++;
}

echo"<br>";
echo"<br>";

echo "Ciclu format cu Foreach <br>";
$array = ['Exercitiul 3 <br>', 'Exercitiul 3 <br>', 'Exercitiul 3 <br>'];
foreach ($array as $element){
    echo $element;
};
echo"<br>";
echo"<br>";

echo "Ciclu format cu FOR <br>";

for($p=0; $p<=25; $p++){
    echo "$p ";
}

echo"<br>";
echo"<br>";

echo "Ciclu format cu While <br>";


$lastname = array("Popescu", "Ionescu", "Georgescu", "Dumitru", "Stoica", "Vasilescu", "Stanescu", "Dragomir", "Marinescu", "Preda", "Radu", "Costache", "Munteanu", "Diaconu", "Dima", "Petrescu", "Tudor", "Popa", "Moldovan", "Ciobanu", "Andrei", "Vlad", "Gheorghe", "Luca", "Nistor", "Enache", "Grigore", "Mihalache", "David", "Toma", "Stan", "Marin", "Barbu", "Constantinescu", "Manea", "Badea", "Chiriac", "Negru", "Bucur", "Sandu", "Nastase", "Turcu", "Paun", "Filip", "Lazar", "Fodor", "Tudose", "Balan", "Lungu", "Fratila", "Luca", "Rosu", "Dan", "Draghici", "Stefanescu", "Radulescu", "Babu", "Gabor", "Muresan", "Dumitrache", "Farcas", "Ivan", "Nica", "Soare", "Davidescu", "Dragan", "Stoian", "Voicu", "Antonescu", "Cojocaru", "Lupu", "Manea", "Oprisan", "Ardelean", "Bojin", "Dobre", "Farcas", "Iacob", "Lazarescu", "Milea", "Musat", "Nicola", "Paunescu", "Popovici", "Popov", "Raducanu", "Rosca", "Tanase", "Toader", "Zavoi", "Iorga", "Vladut", "Stanciu", "Micu", "Sava", "Barsan", "Dobrin", "Burlacu", "Muntean", "Cimpean"); 

$firstname = array("Bianca", "Alexandra", "Andrei", "Elena", "Mihai", "Ion", "George", "Maria", "Ana", "Diana", "Gabriel", "Andreea", "Cristina", "Razvan", "Iulia", "Adrian", "Vlad", "Denisa", "Raluca", "Marius", "Ioana", "Alexandru", "Andra", "Mihaela", "Florin", "Vladimir", "Alina", "Catalin", "Laura", "Darius", "Bogdan", "Ciprian", "Monica", "Mara", "Dumitru", "Irina", "Roxana", "Cristian", "Simona", "Valentin", "Valeria", "Ilinca", "Silvia", "Andi", "Emil", "Paul", "Oana", "Bianca", "Cezar", "Dana", "Marcel", "Sebastian", "Stefan", "Teodora", "Dorin", "Ionut", "Mirela", "Mirela", "Octavian", "Paula", "Anca", "Antonia", "Dan", "Florina", "Francisc", "Gina", "Ionela", "Marius", "Nicoleta", "Patricia", "Robert", "Sorin", "Andra", "Camelia", "Eduard", "Gabriela", "Ileana", "Marian", "Marta", "Melania", "Nicolae", "Ovidiu", "Adina", "Alexandrina", "Alexia", "Emanuela", "Madalina", "Raluca", "Rares", "Valeria", "Vali", "Viorel", "Viviana", "Bianca", "Cristian", "Ioan", "Magdalena", "Tudor"); 

$company = array("Microsoft", "Apple", "Amazon", "Facebook", "Google", "Twitter", "Netflix", "Tesla", "Uber", "Airbnb", "Nike", "Adidas", "Coca-Cola", "PepsiCo", "BMW", "Mercedes-Benz", "Volkswagen", "Toyota", "Samsung", "LG");

$listaabsolventi = array();
for ($i=0, $i<100; $i++){
$surname = array_rand($lastname);
$name = array_rand($firstname); 
$company = array_rand($employer);
$age = rand(18,55);
$incasaritotale = rand (500,1500);
}



