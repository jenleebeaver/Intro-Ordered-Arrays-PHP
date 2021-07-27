<?php
namespace Codecademy;

$treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];
  
// Write your code below:
echo $find_gold = $treasure_hunt[3][4][2][0];
echo "\n";


//NOTES 
//EX1:
$nested_arr = [[2, 4], [3, 9], [4, 16]];
$first_el = $nested_arr[0][0];
echo $first_el; // Prints: 2

//EX2:
$very_nested = [1, "b", 33, ["cat", 6.1, [9, "LOST!", 6], "mouse"], 7.1];
//finding "LOST!" string. Outer array => inner array
$very_nested[3][2][1] = "Found!";
                  
