<?php
namespace Codecademy;
//NOTES
//short array syntax:
//wrapping comma seperated syntax in square brackets []

//EXAMPLES
$number_array = [0, 1, 2];
echo implode($number_array, ", ");
echo "\n";

$string_array = array("first element", "second element");
echo implode($string_array, ", ");
echo "\n";

$str_arr_short = ["first element", "second element"];
echo implode($str_arr_short, ", ");
echo "\n";

$long_array = [
  1,
  2,
  3,
  4,
  5,
  6
];
echo implode($long_array, ", ");
echo "\n";

// Write your code below:
$with_function = array("PHP", "popcorn", 555.55);
//same array with short array syntax 
$with_short = ["PHP", "popcorn", 555.55];
