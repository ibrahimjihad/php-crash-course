<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */
/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/
/* ---------- If Statements --------- */
/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
$age=2;
if ($age>=18){
    echo "you are eligible for vote";
} else {echo "sry";}
echo "<br>";
// Dates
// $today = date("F j, Y, g:i a");

$t = date('H'); //h diye diner hour auto hisab kore

if ($t < 12) {
  echo 'Have a good morning!';
} elseif ($t < 17) {
  echo 'Have a good afternoon!';
} else {
  echo 'Have a good evening!';
}

// Check if an array is empty
// The isset() function will generate a warning or e-notice when the variable does not exists. The empty() function will not generate any warning or e-notice when the variable does not exists.
$posts = [];

if (!empty($posts[0])) { //empty function check kore list empty kina ar !empty check kore list e kisu ase kina
  echo $posts[0];
} else {
  echo 'There are no posts';
}
/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// Echo based on a condition (Same as above)
echo !empty($posts[0]) ? $posts[0] : 'There are no posts'; //for this ternary thing we must have else thing otherwise mull boshaile hobe
$firstPost = !empty($posts[0]) ? $posts[0] : null;
echo "<br>";
// Null Coalescing Operator ?? (PHP 7.4)
// Will return null if $posts is empty
// Always returns first parameter, unless first parameter happens to be NULL
$firstPost = $posts[0] ?? null;

/* -------- Switch Statements ------- */
$favcolor = 'red';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default://kono case er moddhe na mille default ta show korbe
    echo 'Your favorite color is not red, blue, nor green!';
}
//when there are so many conditions its better to use switch statements othwer than ifelse