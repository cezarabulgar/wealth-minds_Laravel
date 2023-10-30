<?php
//Variables and Data Types:

// Declare a variable named $name and assign your name to it. Print out the value of the variable.

// Create variables $age (assign your age), $height (assign your height), and $isStudent (assign a boolean value). Print out these variables with appropriate labels.


$name = 'Cezara';
$age = '24';
$height = '165';
$isStudent = true; 

echo 'Name:'. $name . "<br>";
echo 'Age:'. $age . "<br>";
echo 'Height:'. $height . "<br>";
echo 'Student:'. $isStudent . "<br>";

// Perform basic arithmetic operations using variables:

// Add two numbers and store the result in a variable.
// Subtract one number from another and store the result in a variable.
// Multiply two numbers and store the result in a variable.
// Divide one number by another and store the result in a variable.

echo("Basic arithmetic operations using variables" . "<br>");
$a = 1200; 
$b = 3000; 

$sum = $a+$b;
$difference = $a - $b; 
$product = $a * $b; 
$quotient = $a / $b; 
$modulus = $a % $b;
$exponentiation = $a ** $b;

echo "Sum: " . $sum . "<br>";
echo "Difference: " . $difference . "<br>";
echo "Product: " . $product . "<br>";
echo "Quotient: " . $quotient . "<br>"; 
echo "Modulus: " . $modulus . "<br>"; 
echo "Exponentiation: " . $exponentiation . "<br>";






?>