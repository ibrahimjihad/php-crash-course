<?php // This is a php tag. If there is no html or other content below the php, we don't need to close the php tag.

/* ------- Outputting Content ------- */

// Echo - Output strings, numbers, html, etc
echo 'Hello';
echo "<br>";
echo 123;
echo '<h1>Hello</h1>';

echo 'hello',123,10.6;
// print - Similar to echo, but a bit slower and only for single argument
echo "<br>";
print 'Hello';

// print_r - Gives a bit more info. Can be used to print arrays only for checking error
//print_r ( [1,2,4,5]);
// var_dump - Even more info like data type and length
var_dump('Hello');
var_dump([1, 2, 3]);
