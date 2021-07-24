<?php
namespace Codecademy;

$change_me = [3, 6, 9];
// Write your code below:
$change_me[] = "element";
$change_me[] = 12;
$change_me[1] = "tadpole";
echo implode(", ", $change_me);
echo "\n";


//EXAMPLES
$string_array = ["first element", "second element"];
 
 //add to the end of an array 
$string_array[] = "third element";
 
echo implode(", ", $string_array); 
// Prints: first element, second element, third element 
echo "\n";

//
$string_array = ["first element", "second element", "third element"];
 
$string_array[0] = "NEW! different first element";
 
echo $string_array[0]; // Prints: NEW! different first element"
echo "\n";
echo implode(", ", $string_array);

//OUTPUT 
// 3, tadpole, 9, element, 12
// first element, second element, third element
// NEW! different first element
// NEW! different first element, second element, third element 
