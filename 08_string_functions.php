<?php

$string = "Hellooooo worRlDdd";

echo strlen($string); // length
echo " - ";
echo strpos($string, 'o'); // find index of the first char of input value
echo " - ";
echo strrpos($string, 'o'); // find index of the last char of input value
echo " - ";
echo strrev($string); // Reverse string
echo " - ";
echo strtolower($string); // to lowercase
echo " - ";
echo strtoupper($string); // to uppercase
echo " - ";
echo ucwords($string); // First character to uppercase
echo " - ";
echo str_replace("worRlDdd", "Allllll!", $string); // Replace
echo " - ";
echo substr($string, 1,5); // Sub string : begin index includes, end index doesn't include
echo " - ";
echo substr($string, 8); // Sub string : start from begin index to the end
echo " - ";
echo str_starts_with($string, "Hello") ?  "yes" :  "NO"; // start with
echo " - ";
echo str_ends_with($string, "Hello") ?  "yes" :  "NO"; // End with



?>