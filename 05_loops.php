<?php
/* FOR LOOPS */

/*
C-style loop is the same as JS
for($i = 0; $i <= 10; $i++) {
  //code to execute
}
*/

/*
WHILE LOOP  
while (condition) {
  //code to execute
}
*/

/*
DO WHILE LOOP  - Same as JS
do {
//code to execute
} while (condition) ;
*/

/*
****FOREACH LOOP - DIFFERENT****
//iterate through and return value
  foreach ($array as $value) {
    //code to be executed
  }

  //simple array - gives index
  foreach ($array as $index => $value) {
    //code to be executed
  }

  //associate array - gives key
foreach ($array as $key => $value) {
    //code to be executed
  }

*/


//C-style loop
for($i = 0; $i <= 10; $i++) {
  //concat
  echo 'Number ' . $i . '<br>';
  //interpolate
  echo "Number ${i} <br>";
}

$x = 0;

while($x <= 15) {
  echo 'Next Number ' . $x . '<br>';
  $x++;
}

$y = 0;

do {
  echo 'Next Number ' . $y . '<br>';
  $y++;
} while($y <= 5);

$posts = ['First post', 'Second post', 'Third post'];


//like for as loop
//array and value are reversed compared to JS
foreach($posts as $post) {
  echo $post . '<br>';
}

//Can use both index and post
foreach ($posts as $index => $post) {
  echo "${index} is ${post}<br>";
  echo $index + 1 . ' is ' . $post . '<br>';
}

$array = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'
];

//Like for in loop
foreach ($array as $key => $value) {
  echo "${key} is ${value}<br>";
}