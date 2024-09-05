<?php

// $y = 12;
// function registerUser() {
//   global $y; // need 'global' to run globally
//   echo $y . "<br>";
//   echo "User registered" . "<br>";
// };
// registerUser();

// function registerUser($email) {
//   echo $email . ", registered";
// };
// registerUser("zukkii@email.com");

// function sum($n1, $n2) {
//   return $n1 + $n2;
// };
// $result = sum(5, 5);
// echo $result;

/**
 * Default value
 */
// function sum($n1 = 4, $n2 = 3) {
//   return $n1 + $n2;
// };
// $result = sum(); // would work by replace missing parameters with default value
// $result2 = sum(8);
// echo $result . "<br>";
// echo $result2 . "<br>";

// $subtract = function($n1, $n2) {
//   return $n1 - $n2;
// };
// echo $subtract(10, 5);

// singleline function
$multiply = fn($n1, $n2) => $n1 * $n2;
echo $multiply(10, 5);

?>