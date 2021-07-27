<?php
namespace Codecademy;

$stack = ["wild success", "failure", "struggle"];
echo implode($stack, ", ");
echo "\n";
// Write your code below:
array_push($stack, "blocker", "impediment");
echo implode(", ", $stack);
echo "\n";

array_pop($stack);
echo implode(", ", $stack);
echo "\n";

array_pop($stack);
echo implode(", ", $stack);
echo "\n";

array_pop($stack);
echo implode(", ", $stack);
echo "\n";

array_pop($stack);
echo implode(", ", $stack);
echo "\n";

array_pop($stack);
echo implode(", ", $stack);
echo "\n";

//NOTES:

//array_pop(arg):
//removes last element of the array and returns removed element (decreases array length by one)
//EX:
$my_array = ["tic", "tac", "toe"];
array_pop($my_array); 
// $my_array is now ["tic", "tac"]
echo implode(", ", $my_array);
echo "\n";

$popped = array_pop($my_array); 
// $popped is "tac"
echo $popped;
echo "\n";
// $my_array is now ["tic"]
echo implode($my_array);
echo "\n";

//array_push(arg):
$new_array = ["eeny"];
$num_added = array_push($new_array, "meeny", "miny", "moe"); 
echo $num_added; // Prints: 4
echo implode(", ", $new_array); // Prints: eeny, meeny, miny, moe 
