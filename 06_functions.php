<?php

/*
Scope works different
global variables cannot be called in a function *UNLESS* 'global is typed before it is declared.
eg. 
$x = 10
function functionName(ARGUMENT) {
  global $x;
  echo $x
}
*/
$y = 10;

function registerUser($email) {
  //allows use of $y
  global $y;
  echo $y;
  echo $email . ' registered';
}


registerUser('PARAMETER');

function sum($n1, $n2) {
  return $n1 + $n2;
}

echo sum(5,5);

//single line arrow function - arrow function almost the same - requires fn before arg inputs
$multiply = fn($n1, $n2) => $n1 * $n2;

