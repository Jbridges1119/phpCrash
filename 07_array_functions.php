<?php
/*
Similar to JS methods, PHP has it's own pre-built functions that can be used with arrays */

$fruits = ['apple', 'orange', 'pear'];

// ARRAY LENGTH
echo count($fruits);

//SEARCH ARRAY (like .includes() for JS)
//returns boolean
var_dump(in_array('apple', $fruits));

//ADD TO ARRAY END
$fruits[] = 'grape';
//or 
array_push($fruits, 'blueberry', 'banana');
print_r($fruits);

//ADD TO ARRAY FRONT
array_unshift($fruits, 'mango');

//REMOVE FROM ARRAY END
array_pop($fruits);
echo '<pre>';
print_r($fruits);
echo '</pre>';
//REMOVE FROM ARRAY BEGINNING
array_shift($fruits);

//REMOVE AT LOCATION
//this will not correct the index - index 2 will be missing - 0, 1, 3, 4
// unset($fruits[2]);

//SPLIT INTO CHUNKS (group into)
$chunked_array = array_chunk($fruits, 2);
print_r($chunked_array);
//output groups into nested array of 2

$arr1 = [1,2,3];
$arr2 = [4,5,6];

//MERGE ARRAY
$arr3 = array_merge($arr1, $arr2);
//SPREAD OPERATOR JUST LIKE JS
$arr4 = [...$arr1, ...$arr2];
print_r($arr3);
print_r($arr4);

//Combine two arrays - array1 becomes keys - array2 becomes values
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);
/*output
[
  'green' => 'avocado',
  'red' => 'apple',
  'yellow' => 'banana'
]
*/

//Works like Object.keys()
$keys = array_keys($c);
//output ['green', 'red', 'yellow'];

$flipped = array_flip($c);
//flips key value pairs

$numbers = range(1,20);
//outputs and array of 1-20

//takes a callback - works just like .map in JS
$newNumbers = array_map(function($number) {
  return "Number ${number}<br>";
}, $numbers);

print_r($newNumbers);

//filter
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
print_r($lessThan10);

//REDUCE
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);