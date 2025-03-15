<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/
$name="Jihad";
$age=25;
echo $name;
echo "<br>";
echo $age;
echo "<br>";
$has_kids=false;
echo $has_kids; //for true it shows 1 for false it shows nothing
echo var_dump($has_kids); //i shows false
echo "<br>";
$cash_on_hand=50.77;
echo $cash_on_hand;
echo "<br>";
//lets print multiple variable in a single line recommended
echo "$name is $age years old with $cash_on_hand taka";
echo "<br>";
//lets print multiple variable in a single line way2 not recommended
echo $name . " is " . $age . " years old";
echo "<br>";
echo 5+5;
echo "<br>";
echo "5"+"6"; //quotation er bhitore int thakle addiotion hoy by default
echo "<br>";
echo 5*7;
echo "<br>";
echo 5%2;
echo "<br>";
//use contant only for things that never gonna change 
define("hOST","localhost");
echo hOST;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";