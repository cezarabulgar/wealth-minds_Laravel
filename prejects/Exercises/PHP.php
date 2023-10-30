<?php
// game loop
while (TRUE)
{
    fscanf(STDIN, "%s",
        $enemy1 // name of enemy 1
    );
    fscanf(STDIN, "%d",
        $dist1 // distance to enemy 1
    );
    fscanf(STDIN, "%s",
        $enemy2 // name of enemy 2
    );
    fscanf(STDIN, "%d",
        $dist2 // distance to enemy 2
    );

    if ($dist1 < $dist2) {
        echo ($enemy1."\n");
    } else {
        echo ($enemy2."\n");
    }
}
?>


<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

 //The first line reads an integer input from standard input and stores it in the variable $n. This variable represents the size of the Rangoli.
//  The code defines two functions: getAlphabetChar and printRangoli.

// getAlphabetChar function takes an index as input and returns the alphabet character corresponding to that index. The function uses the chr() function in PHP, which converts an ASCII value to its corresponding character. In this case, it uses the ASCII value 97 for the lowercase letter 'a' and adds the input index to it to get the desired character.

// printRangoli function takes the size of the Rangoli as input and generates the Rangoli pattern.

// The function initializes the $width variable, which is the total number of characters in each line of the Rangoli pattern. The width is calculated as $size*2-1, where $size is the input size.

// The $alphabet array is created using the range() function. This array contains elements from 0 to $size - 1, representing the positions of the alphabet characters used in the Rangoli pattern.

// The first loop runs in reverse order, starting from $i = $size - 1 and decrementing $i in each iteration until $i >= 0. This loop generates the top half of the Rangoli.

// The $line variable is constructed by slicing the $alphabet array from index 0 to $i + 1 and then joining the elements with hyphens using implode().
// The $line is then padded with hyphens on both sides using str_pad() to make it centered in the pattern, and the result is printed using echo.

//Finally, the printRangoli($n) function is called with $n=5, which prints a Rangoli pattern of size 5. The pattern will be symmetrical with the letter 'a' in the center and will gradually increase in size as you go down.



 
 fscanf(STDIN, "%d", $n);
//  fscanf: This is a function in PHP used to read formatted input from a file or stream. In this case, it is reading from the standard input (STDIN).

// STDIN: This is a predefined constant in PHP that represents the standard input stream. When you run a PHP script in the command line, you can provide input through the terminal, and STDIN is the stream used to read that input.

// "%d": This is a format specifier used to tell fscanf how to interpret the input. In this case, %d is used to read an integer value from the input.

// $n: This is a variable where the integer value read from the standard input will be stored. The %d format specifier indicates that the input is expected to be an integer, and the value will be stored in the variable $n.

// So, this line of code is reading an integer value from the standard input and storing it in the variable $n. The value entered by the user will be treated as an integer, and any non-numeric characters will be ignored. If the input cannot be converted to an integer, $n will be set to 0 by default.




// Function to get the alphabet character fo a given index
function getAlphabetChar($index){
    return chr(97+$index);
}
//function to print the Rangoli pattern 
function printRangoli($size){
    $width = $size*2-1;
    $alphabet = range(0, $size -1); 

    for($i = $size - 1; $i>=0; $i--){
        $line = implode('-', array_slice($alphabet, 0, $i +1));
        $line = str_pad($line, $width, '-', STR_PAD_BOTH);
        echo($line . PHP_EOL);
    }

    for($i = $size - 1; $i<=0; $i++){
        $line = implode('-', array_slice($alphabet, 0, $i +1));
        $line = str_pad($line, $width, '-', STR_PAD_BOTH);
        echo($line . PHP_EOL);
    }

}
$n=5;
printRangoli($n);
?>