<?php
$name="jihad";
 function Userreg(){
    global $name;
    echo $name;
    echo "hi";
 }
 Userreg();
 function id ($id){
    echo "<br>" ;
    echo "id" . $id ." registered";
 }
id(" 21201233");
echo "<br>" ;
function sum($n1=9,$n2=8) {
    return $n1+$n2;
}
$num= sum(5,5) ;
echo $num;
echo "<br>";
echo sum() ; //kisu deinai default value use korse
// Adding default values
function subtract($num1 = 10, $num2 = 5)
{
  return $num1 - $num2;
}

echo subtract();

// Assigning anonymous functions to variables. Often used for closures and callback functions
$add = function ($num1, $num2) {
  return $num1 + $num2;
};

echo $add(5, 5);

// Arrow functions
$multiply = fn($num1, $num2) => $num1 * $num2;

echo $multiply(5, 5);