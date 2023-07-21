<?php

class Calculator { 

 public $name = 'Toshiba';
 public $year = 2023; 

  public function add($x, $y) { 
   $rezultat = $x + $y;

   echo $x. 'plus' .$y. 'este egal cu' . $rezultat;

   return $rezultat;  
  }

  public function substract($x, $y) {
    $rezultat = $x - $y; 

    echo $x. 'minus' .$y. 'este egal cu' . $rezultat;

    return $rezultat;

  }
}

$calculator = new Calculator();
