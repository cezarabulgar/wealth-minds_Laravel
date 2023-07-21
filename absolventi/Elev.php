
<?php

class Elev {
  public $name; 
  public $surname;
  private $age; 

  public function __construct($name, $surname, $age){
     $this->name = $name;
     $this->surname = $surname;
     $this->age = $age;
  }

  // public function afisare_elev() {
  //     echo "Nume: " . $this->name . ", Prenume: ". $this->surname . ", Varsta: " . $this->age . "<br>";
  //   } 
}
// $elev = new Elev ("Cezara", "Bulgar", 24); 
// echo $elev->name; 