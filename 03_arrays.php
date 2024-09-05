<?php
// Simple Array
$numbers = [1,2,45,67,665];
$fruits = array("apple", "orange", "pear");

// print_r($numbers);
// var_dump($fruits);
// echo $fruits[1];

// Associatative Array (alike 'map' in java, or 'json')
$colors = [
  1 => 'red',
  4 => 'blue',
  5 => 'green'
];
$hex = [
  "red" => "#ff0000",
  "green" => "00ff00",
  "blue" => "0000ff"
];

// echo $colors[4];
// echo $hex["blue"];

$people = [
  [
    "first_name" => "Zukkii",
    "last_name" => "Hampton",
    "age" => 7
  ],
  [
    "first_name" => "Titann",
    "last_name" => "Hampton",
    "age" => 5
  ],
  [
    "first_name" => "Kinkin",
    "last_name" => "Iem",
    "age" => 4
  ],
];

// echo $people[1]["first_name"];
echo(json_encode($people)); // see json format
?>