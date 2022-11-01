<!-- Like EJS alligator tags -->
<?php

echo "test";

//inside comments
?>

<!--
 comment outside
  -->
  <!-- sudo /opt/lampp/manager-linux-x64.run -->

<?php
// echo - Output Multiple strings, numbers, html, etc
echo 123, 'Hello', 10.5;
// 123Hello10.5

//print - Works like echo, but can only take in a single argument
print 123;
//123

// print_() - Print single values and arrays
print_r([1, 2, 3]);
//Array ( [0] => 1 [1] => 2 [2] => 3 )

//var_dump() - Returns more info like data type and length
var_dump('Hello');
//string(5) "Hello"

// var_export() - Similar to var_dump(). Outputs a string representation of a variable (quotes are displayed)
var_export('Hello');
//'Hello'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?php echo 'Hello'; ?></h1>
</body>
</html>