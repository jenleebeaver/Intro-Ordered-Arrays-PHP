<?php
namespace Codecademy;

$message = ["Oh hey", " You're doing great", " Keep up the good work!\n"];

$favorite_nums = [7, 201, 33, 88, 91];
// Write your code below:

//NOTES 
$number_array = [0, 1, 2];
echo "\n";
echo implode($number_array); // Prints: Array
echo "\n";

//print_r function 
//prints in human readable format 
print_r($number_array);
echo "\n";
echo implode(", ", $number_array);
echo "\n";

//implode($glue, $message)
echo implode("!", $message);
echo "\n";
//
echo print_r($favorite_nums);

//OUTPUT
// 012
// Array
// (
//     [0] => 0
//     [1] => 1
//     [2] => 2
// )

// 0, 1, 2
// Oh hey! You're doing great! Keep up the good work!

// Array
// (
//     [0] => 7
//     [1] => 201
//     [2] => 33
//     [3] => 88
//     [4] => 91
// )
// 1 
