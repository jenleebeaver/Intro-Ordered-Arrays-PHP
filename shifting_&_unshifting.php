<?php
namespace Codecademy;
$record_holders = [];
// Write your code below:
array_unshift($record_holders, "Tim Montgomery", "Maurice Greene", "Donovan Bailey", "Leroy Burrell", "Carl Lewis");
echo implode($record_holders, ", ");
echo "\n";
echo array_shift($record_holders);
echo "\n";
echo implode($record_holders, ", ");
echo "\n";
array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");
echo "\n";
echo implode($record_holders, ", ");
echo "\n";
array_shift($record_holders);
echo implode($record_holders, ", ");
echo "\n";
array_unshift($record_holders, "Usain Bolt");
echo implode($record_holders, ", ");
echo "\n";
echo "\n";

//
echo "EXAMPLES: ";
echo "\n";
//NOTES 
//EX1 array_shift:
$adjectives = ["bad", "good", "great", "fantastic"];
$removed = array_shift($adjectives); 
echo $removed; //Prints: bad
echo "\n";
echo implode(", ", $adjectives); 
echo "\n";
// Prints: good, great, fantastic 

//EX2 array_unshift():
$foods = ["pizza", "crackers", "apples", "carrots"];
$arr_len = array_unshift($foods, "pasta", "meatballs", "lettuce"); 
echo $arr_len; //Prints: 7
echo "\n";
echo implode(", ", $foods); 
echo "\n";
// Prints: pasta, meatballs, lettuce, pizza, crackers, apples, carrots
