<?php
$fruits = ['apple', 'banana', 'orange'];

// Get array length
echo count($fruits);

// Search array
echo in_array('banana', $fruits);
echo "<br>";
// Add to an array
$fruits[] = 'grape';
array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'kiwi'); // Adds to the beginning

// Remove from array
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first
// Remove specific element
unset($fruits[2]);

print_r ($fruits);
echo "<br>";

// Split into chunks of 2
$chunkedArray = array_chunk($fruits, 2);
print_r($chunkedArray); // its like nested array part part kora 2ta 2ta kore element diye
echo "<br>";
// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
print_r($arr3);
echo "<br>";
$arr4 = [...$arr1, ...$arr2]; // Use Spread basically ...arr copies the list 
var_dump($arr4);
echo "<br>";
// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b); //array_combine function key value pair hisabe dictionary banay dey
print_r ($c);
echo "<br>";
echo $c['green']; //key diye value print korsi
echo "<br>";
// Array of keys
$keys = array_keys($c);

// Flip keys with values
$flipped = array_flip($c);
var_dump($flipped);

// Create array of numbers with range()
$numbers = range(1, 20);
print_r ($numbers);
// Map through array and create a new one
$newNumbers = array_map(function ($number) {
  return "Number ${number}";
}, $numbers);
print_r ($newNumbers); echo "<br>";
// Filter array
$lessThan10 = array_filter($numbers, fn($number) => $number < 10);
print_r ($lessThan10); echo "<br>";
// Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);