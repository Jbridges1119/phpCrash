<?php

/*
Conditionals
< , >, ===, ect - All the same as JS
*/

/*
If statements - Like JS **BUT** elseif not else if

if (condition) {
  //code to be executed
} elseif(condition) {
  //code to be executed
} else {
  //code to be executed
}
*/

/*
Ternary Operator - Same as JS

true ? $true_variable : $false_variable
*/

/*
Coalescing operator(??) - Like JS Short Circuit(&&)

true ?? false
*/

/*
Switch statement

switch($variable) {
  case 'String':
    //code to be executed
    break;
  case 'String2':
    //code to be executed
    break;
  default:
   //code to be executed
}
*/

$age = 36;

if($age >= 18) {
  echo 'Please vote at the next election';
} else {
  echo 'Sorry, you are not old enough';
}

//date will give info on current date - "H" gives the hour of the day
$time = date("H");

echo $time;
//output hour in CST

if($time < 12) {
  echo 'Good Morning';
} elseif($time < 17) {
  echo 'Good Afternoon';
} else {
  echo 'Good Evening';
}

$posts = ['First Post'];


//$posts not empty
$firstPost = !empty($posts) ? $posts[0] : 'No Posts';

//coalescing operator (??) like a short circuit (&&)
$first = $posts[0] ?? Null;

echo $firstPost;
echo $first;


//Switch statements a lot like JS
$favcolor = 'red';

switch($favcolor) {
  case 'red':
    echo 'Your favorite color is red';
    break;
  case 'blue':
    echo 'Your favorite color is blue';
    break;
  default:
    echo 'Your favorite color is not red or blue';
}