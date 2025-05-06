<?php

// 1-Write a PHP script that records 3 digits and prints the total of the first two digits multiplied by the third digit.



// $num1 = 10;
// $num2 = 5;
// $num3 = 2;

// $sum = $num1 + $num2;

// $result = $sum * $num3;


// echo "result: " . $result;


// ----------------------------------------




// 2-A program that calculates the size of a box whose length and width are fixed with a value of 5 and 10 and the height is variable (size = length x width x height)


// $length = 8;

// $width = 11;

// $height = 9;

// $size = $length * $width * $height;

// echo "The size of  box is: " . $size;



// -----------------------------------------------



// 3-Write a PHP script that takes a number integer representing the hours and converts it to seconds.

// $hours = 1; 

// $seconds = $hours * 3600;

// echo $hours . " hour <br> " .  $seconds . " seconds";


// 4- Write a PHP script that calculates the Area of a Triangle store the base and height Print the area.


// $a = 10;  
// $height = 5; 

// $area = ($a* $height) / 2;


// echo "مساحة المثلث: " . $area;



// -----------------------------------------

// 5- Write a PHP script that takes the age in years and prints the age in days.

// $ageInYears = 24; 


// $ageInDays = $ageInYears * 365;


// echo "Age in days: " . $ageInDays;



// ------------------------------------------------



// 6-Get the length of this sentence. 

// $string = "Get the length of this sentence.";

// $length = strlen($string);

// echo "The length of the string is: " . $length ;




// -----------------------------------------------------

// 7-Get the length of this sentence without spaces.  


// $string = "Get the length of thissentence.";

// $string_Spaces = str_replace(' ', '', $string);


// $length = strlen($string_Spaces);

// echo "The length of the string with spaces is: " . $length ;


// --------------------------------------------


// 8-Get the number of words in this sentence. 

// $length_string = "Get the number of words in this sentence.";
// $Count = str_word_count($length_string);
// echo "Number of words: " . $Count;



// --------------------------------------------------


// 9-Get the word (EraaSoft) from the string and print it.


// $string = "I am learning PHP at EraaSoft Academy.";

// if (strpos($string, "EraaSoft") !== true) {
//     echo "Found word: EraaSoft";
// }

// -------------------------------------------------




// 10- Remove the word (by) from the string and print the string with and without (by)


// $string = "This book was written by a famous author.";

// echo " string: " . $string . "<br>";

// $updatedString = str_replace(" by", "", $string);

// echo "String after removing 'by': " . $updatedString;


// ---------------------------------------------------------


// 11-Make a new variable called (Full_string) that concatenate string_one and string_two


// $string_1 = "Hello ";
// $string_2 = "errasoft";


// $result =  $string_1 . $string_2;

// echo $result;



// -------------------------------------------


// 12-Compare the full_string and this string (EraaSoft).

// $part_one = "Hello, ";
// $part_two = "World!";
// $complete_string = $part_one . $part_two;

// $target_string = "EraaSoft";

// if ($complete_string === $target_string) {
//     echo "The strings are identical.";
// } 

// else {
//     echo "The strings are different.";

// }


// -------------------------------------------


// 13- Write a PHP script that stores the string as a variable and checks if the length is odd or even.



// $string = "ErraSoft";      

// $string_length = strlen($string);


// if ($string_length % 2 == 0) {
//     echo "The length of the string is even.";
// } else {
//     echo "The length of the string is odd.";
// }


//--------------------------------------------

// 14-A Boolean is a data type that has only two values true or false. These values often correspond to 1 (true) or 0 (false). When a 1 or a 0 is used, it's called an int Boolean. Write a PHP script that stores an int Boolean and outputs its opposite
 	// (1 becomes 0 and 0 becomes 1);


    //  $boolean_value = 1; 
     
    //  $opposite_value = !$boolean_value;
     

    //  echo "The of " . $boolean_value . $opposite_value;
    //  

    // ----------------------------------------------


// 15

// Make a calculator with these operations using if and else if
// o Submission 
// o Subtraction 
// o Multiplication 
// o Division 
// o Power 
// o Modulus 


// $num1 = 10;
// $num2 = 5;
// $operation = "division";


// if ($operation === "addition") {
//     $result = $num1 + $num2;
//     echo "The result of addition is: " . $result;

// } elseif ($operation === "subtraction") {
//     $result = $num1 - $num2;
//     echo "The result of subtraction is: " . $result;

// } 
// elseif ($operation === "multiplication") {
//     $result = $num1 * $num2;
//     echo "The result of multiplication is: " . $result;
// }
//  elseif ($operation === "division") {
    
//     if ($num2 != 0) {
//         $result = $num1 / $num2;
//         echo "The result of division is: " . $result;
//     } else {
//         echo "Error: Division by zero is not allowed.";
//     }

// }

// else {
//     echo "Invalid operation.";
// }








     






