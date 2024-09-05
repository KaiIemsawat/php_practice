<?php

/**
 * For loop syntax
 */

//  for ($x = 0; $x <= 10; $x++) {
//   echo "Number : " . $x . "<br>";
//  }

/**
 * While loop
 */

//  $x = 1;
//  while ($x <= 15) {
//   echo "Number " . $x . "<br>";
//   $x+=1; // or $x++;
//  };

/**
 * Do - while loop
 */
//  $x = 15;
//  do {
//   echo $x;
//  } while ($x < 10);

/**
 * For-each loop
 */
$posts = ['1st post', '2nd post', '3rd post', '4th post'];
//for
// for ($x = 0; $x < count($posts); $x++) {
//   echo $posts[$x] . "<br>";
// }
//for - each
// foreach($posts as $post) {
//   echo $post . "<br>";
// }

// for - each : index
// foreach($posts as $index => $post) {
//   echo $post . " - " . $index . "<br>";
// }

// for - each : key - value
$colors = [
  1 => 'red',
  4 => 'blue',
  5 => 'green'
];
foreach($colors as $key => $value) {
  echo "$key - $value" . "<br>";
};

?>