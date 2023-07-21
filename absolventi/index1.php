
<?php

require_once 'Calculator.php'; 
require_once 'AdvancedCalculator.php'; 

echo " <br> Calculator <br>";

$calculator = new Calculator();

 $calculator->add(23,34);
 echo "<br>"; 

 $calculator->substract(23,34);
 echo "<br>"; 
 
 echo "<br> Advanced Calculator <br>";

 $calculatorAvansat = new AdvancedCalculator();
 
 $calculatorAvansat->intdiv(10,304);
 echo "<br>"; 

 $calculatorAvansat->multiply(11,3,34,67);
 echo "<br>"; 

 $calculatorAvansat->pow(23,-34);
 echo "<br>"; 


 