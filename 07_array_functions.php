<?php

$fruits = ["apple", "orange", "pear"];

// Get length
// echo count($fruits);

// Search array
// var_dump(in_array("apple", $fruits));

// Add to array
$fruits[] = "grape"; // add last
array_push($fruits, "blueberry", "strawberry"); // add last, could add multiple values
array_unshift($fruits, "mango"); // add first
print_r($fruits);

// Remove
array_pop($fruits); // remove last
print_r($fruits);
array_shift($fruits); // remove first
print_r($fruits);
// unset($fruits[2]); // remove specific index, include the index itself
// print_r($fruits); 

// Split into chunks
// $chunk_array = array_chunk($fruits, 3); // (arrayNeedToBeSplit, numberOfElementInEachArray)
// print_r($chunk_array);

// Merge Array
$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);
print_r($arr3);
$arr4 = [...$arr1, ...$arr2];
print_r($arr4);

// Combine array as key and value
$a = ["green", "red", "yellow"];
$b = ["avocado", "strawberry","banana"];
$c = array_combine($a, $b);
print_r($c);

// Get array of keys
$key = array_keys($c);
print_r($key);

// flip keys <-> values
$flipped = array_flip($key);
print_r($flipped);

// Range
$numbers = range(1, 10);
print_r($numbers);

// Array Map similar to JS map
$newNumbers = array_map(function($number) {
  return "Number " . $number;
}, $numbers);
print_r($newNumbers);

// Filter
$lessThan6 = array_filter($numbers, fn($number) => $number <= 5); // function $number where $number less than or equal to 5
print_r($lessThan6);

$nums = range(1, 10);
print_r($nums);

$sum = array_reduce($nums, fn($carry, $number) => $carry + $number);
var_dump($sum);



?>