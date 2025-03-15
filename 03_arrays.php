<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];
//another way
$names=array("jihad","mukto");
// Simple array of strings
$colors = ['red', 'blue', 'green'];
echo "<br>";
print_r ($colors);
echo "<br>";
var_dump ($names);
echo "<br>";
//print index wise
echo $names[1];
echo $colors[2];
//we can customize indexing
$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
  ];
  
echo $hex['red'];
echo "<br>";
//Multi-dimansional arrays are often used to store data in a table format.
// Single person
$person1 = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// Array of people
$people = [
  $person1, //   [...$person1]
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com',
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com',
  ],
];

//var_dump($people);

// Accessing values in a multi-dimensional array
echo $people[0]['first_name'];
echo "<br>";
echo $people[2]['email'];
// Encode to JSON
var_dump(json_encode($people));