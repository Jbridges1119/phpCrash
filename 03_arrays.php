<?php 
//simple Array - 2 ways - Both work fine
$numbers = [1,3,4];
$fruits = array('apple','banana', 'pear');

//print_r for arrays
print_r($numbers);

//shows more information - array size and type of contents
var_dump($numbers);

//same as JS
echo $fruits[1];

//Associative Array (Like JS Object)
$colors = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'
];

//like a JS object
echo $colors['blue'];

//multi-dimensional array
$people = [
  [
    'first_name' => 'Jeff',
    'last_name' => 'Bridges'
  ],
  [
    'first_name' => 'Not Jeff',
    'last_name' => 'Not Bridges'
  ]
  ];

  //Just like JS array with nested objects
  echo $people[1]['last_name'];
  //output Not Bridges

  //output as JSON
  var_dump(json_encode($people));
  //"[{"first_name":"Jeff","last_name":"Bridges"},{"first_name":"Not Jeff","last_name":"Not Bridges"}]" 