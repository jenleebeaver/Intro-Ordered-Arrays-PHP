<?php
namespace Codecademy;

$round_one = ["X", "X", "first winner"];

$round_two = ["second winner", "X", "X", "X"];

$round_three = ["X", "X", "X", "X", "third winner"];

// Write your code below:

//EXAMPLES
//indexing an array
$my_array = ["tic", "tac", "toe"];
echo $my_array[1]; // Prints: tac
echo "\n";

//
$num_var = 2;
$important_info = ["talking chicken", 181, "magnets?!", 99];
echo $important_info[$num_var]; // Prints: magnets?!
echo "\n";

//
$winners = [$round_one[2], $round_two[0], $round_three[4]];
echo print_r($winners);
echo "\n";
echo implode(", ", $winners);

//OUTPUT 
// tac
// magnets?!
// Array
// (
//     [0] => first winner
//     [1] => second winner
//     [2] => third winner
// )
// 1
// first winner, second winner, third winner 
