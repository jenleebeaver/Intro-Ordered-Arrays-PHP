<?php

//EX1
$my_array = array(0, 1, 2);
//implode() returns a string representation of array elements
echo "Example 1\n";
echo "Array: " . implode($my_array, ", ");
echo "\n";
//count() returns the number of elements in an array
echo "Count: " . count($my_array);
echo "\n";
echo "\n";

//EX2
$string_array = array("first element", "second element");
echo "Example 2\n";
echo "Array: " . implode($string_array, ", ");
echo "\n";
echo "Count: " . count($string_array);
echo "\n";
echo "\n";

//EX3
$mixed_array = array(1, "chicken", 78.2, "bubbles are crazy!");
echo "Example 3\n";
echo "Array: " . implode($mixed_array, ", ");
echo "\n";
echo "Count: " . count($mixed_array);
echo "\n";
echo "\n";

// Write your code below:
$first_array = array("a", 1, "b", 2, "c");
echo implode($first_array, ", ");
echo "\n";
echo count($first_array);

//OUPUT 
// Example 1
// Array: 0, 1, 2
// Count: 3

// Example 2
// Array: first element, second element
// Count: 2

// Example 3
// Array: 1, chicken, 78.2, bubbles are crazy!
// Count: 4

// a, 1, b, 2, c
// 5
