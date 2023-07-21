
<?php

require_once 'Elev.php';

class Absolvent extends Elev {
  public $dataabsolvirii; 
  public $notafinala;
  private $totalincasari; 
  private $employer; 

  public function __construct($name, $surname, $age, $dataabsolvirii, $notafinala, $totalincasari, $employer){
    parent::__construct($name, $surname, $age);
     $this->dataabsolvirii = $dataabsolvirii;
     $this->notafinala = $notafinala;
     $this->totalincasari = $totalincasari;
     $this->employer = $employer;
  }
 
  // public function afisare_absolvent() {
  //   echo "Nume: " . $this->name . ", Prenume: " . $this->surname . ", Varsta: " . $this->age . ", Data absolvirii: " . $this->dataabsolvirii . ", Nota finala: " . $this->notafinala . ", Total incasari: " . $this->totalincasari . ", Employer: " . $this->employer . "<br>";
  // } 
  }   
  // $absolvent = new Absolvent ("Cezara", "Bulgar",24, 2022, 8, 500, "Amazon"); 
  // echo $absolvent->name; 


  
  


