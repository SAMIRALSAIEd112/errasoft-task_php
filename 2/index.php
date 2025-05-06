<?php

// task

// 1 - Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position

// for ($i = 1; $i <= 10; $i++) {
//     echo $i;
//     if ($i < 10) {
//         echo "-";
//     }
// }



// **************************************

// 3 - Write a program which will count the "r" characters in the text "eraasoft"


// $text = "eraasoft";
// $item = 0;

// for ($i = 0; $i < strlen($text); $i++) {
//     if ($text[$i] == 'r') {
//         $item++;
//     }
// }

// echo "Number of r characters: $item";


// *******************************************


// 4 - Write a PHP program which iterates the integers from 1 to 50. For multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz" 


// for ($i = 1; $i <= 50; $i++) {
//     if ($i % 15 == 0) {
//         echo "FizzBuzz\n";
//     } elseif ($i % 3 == 0) {
//         echo "Fizz\n";
//     } elseif ($i % 5 == 0) {
//         echo "Buzz\n";
//     } else {
//         echo "$i\n";
//     }
// }



// ***************************************


// 5 - Create a script using a for loop to add all the integers between 0 and 30 and display the total 
 
// Output  : The sum of the numbers 0 to 30 is 465



// $total = 0;

// for ($i = 0; $i <= 30; $i++) {
//     $total += $i;
// }

// echo "the sum of the numbers 0 to 30 is $total";



// ************************************************


// 6 - Create a function that takes an array of numbers. Return the Largest number in the array.
// $numbers = [ 5 , 15 , -10 , 100 , 250 , 0 , 1   ]



// $numbers = [5, 15, -10, 100, 250, 0, 1];

// $largest = $numbers[0]; 

// for ($i = 1; $i < count($numbers); $i++) {
//     if ($numbers[$i] > $largest) {
//         $largest = $numbers[$i];
//     }
// }

// echo "The largest number is: $largest";



// *******************************************


// 7 - Create a function that takes an array of numbers. Return the Smallest number in the array


// $numbers = [5, 15, -10, 100, 250, 0, 1];

// $small = $numbers[0]; 

// for ($i = 1; $i < count($numbers); $i++) {
//     if ($numbers[$i] < $small) {
//         $small = $numbers[$i];
//     }
// }

// echo "The small number is: $small";



// *******************************************

// 8 - Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number
//  Example : the factorial of 4 is 4*3*2*1= 24



// $number = 5; 
// $result = 1;     

// for ($i = 1; $i <= $number; $i++) {
//     $result *= $i; 
// }

// echo "The result of $number is: $result";




// *******************************************



// 9 - Write a PHP program that prints the odd numbers from 1 to 15 using a while loop.



// $number = 1; 

// while ($number <= 15) {
//     if ($number % 2 != 0) { 
//         echo "-".$number . " <br> "; 
//     }
//     $number++; 
// }





// ************************************************

// 10 - Write a PHP program that prints the even numbers from 1 to 15 using a while loop.


// for ($i = 1; $i <= 15; $i++) {
//     if ($i % 2 == 0) {
//         echo $i . " ";
//     }
// }



// **********************************


// 15 - Write a PHP program that prints all the numbers between 1 and 100 that are divisible by 3 using a do while loop.



$number = 1;

do {
    if ($number % 3 == 0) {
        echo $number . " ";
    }
    $number++;
} while ($number <= 100);










?>