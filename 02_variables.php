<?php 
/**
 * PHP TYPES
  * - String
  * - Integer
  * - Float
  * - Boolean
  * - Array
  * - Objectt
  * - NULL
  * - Resource

  * Variables must be prefix with '$'
  * Variables must start with a latter or underscore character
  * Variables can't start wth a number
  * Variables can only contain alpha-numberic characters and underscores
  * Variables are case-sensitive
*/

$name = "Zukkii"; // String
$age = 7;
$isHappy = true; // echo $isHappy; // false -> not display anything | true -> display '1'
$cash_in_pocket = 25.75;

// var_dump($cash_in_pocket);

// echo "$name is $age years old";
// echo "5" + "5"; // will get 10

/**
 * Constance
 */

 define("HOST", "localhost");
 define("DB_NAME", "dev_db");

 echo HOST;
?>