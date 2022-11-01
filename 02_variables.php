<?php

/*
PHP DATA TYPES

-- String
-- Integer -Whole Number
-- Float -Decimal numbers
-- Boolean
-- Array

--Object  - A class
--NULL -Empty variable
--Resource -Special variable that holds a resource

*/

/* 
VARIABLE RULES

--Start with $
--Cannot start with a number (Only A-z, and _)
--Case Sensitive
*/

$name = 'Jeff'; //String
$age = 36; //Int
$has_kids = true; //Bool
$cash_on_hand = 20.55;

// echo boolean shows 1 for true and nothing for false
echo $has_kids;
 

//Shows type and value
var_dump($has_kids);


var_dump($cash_on_hand);


//concat with a period .
echo $name . ' is ' . $age . ' years old';
//Output Jeff is 36 years old

//like a JS template literal
echo "${name} is ${age} years old";
//Output Jeff is 36 years old

$x = '5' + '5';
var_dump($x);
//Output int(10)

// modules operator is the same
echo 10 % 3;
//Output 1

//Constants
define('UPPERCASENAME', 'valueis');
define('DB_Host', 'dev_db');

echo UPPERCASENAME;
//Output valueis