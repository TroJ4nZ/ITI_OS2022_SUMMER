<?php
// Php dashboard demo
// phpinfo();

//******************************/  
//Multi line print
# First Example
$variable = 50;
// print <<<END
echo "This uses the 'here document' syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!";

echo "<br>************************<br>";
// END;
print <<<END
This uses the 'here document' syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
END;

echo "<br>************************<br>";

# Second Example
print "********This spans
multiple lines. The newlines will be
output as well";
echo "<br>************************<br>";


//******************************/  
//variables

$y = 1;
$X = 15;
$x = 4;
$s = "I Love PHP";

echo "<span style='color:red'>The value of variable
x=:</span>" . $x . "<br>";

echo "<span style='color:red'>The value of variable
x=:</span>$x<br>";

echo "<br>";
echo "The value of variable y=:$y";

echo "<br>Capital letters<br>";
echo "Mixed leters<br>";
echo "small letters<br>";
echo ("That's all!");

echo $x, $y . "<br>";
// print $x,$y;
echo "<br>";

var_dump($s);
echo "<br>";
echo "<br>";

//******************************/  
//whitespace insensitive
$four = 2 + 2; // single spaces
$four    =  2  + 2 + 1; // spaces and tabs
$four =
   2 +
   2; // multiple lines
echo "<br>";
echo "Value of my variable =$four";
echo "<br>";

//******************************/  

// Object Demo

class Fruit
{
   // Properties
   public $name;
   public $color;
   public $typeFruit;

   // Methods
   function set_name($name)
   {
      $this->name = $name;
   }
   function get_name()
   {
      return $this->name;
   }
}
//******************************/  
//Constant
define("MINSIZE", 3360);
define("MAXSIZE", 500);
define('PI', 3.14);

echo MINSIZE . "<br>";
echo constant("MINSIZE") . "<br>"; // same thing as the previous line

//can't reassign MAXSIZE=100;
$c = MAXSIZE;
echo "<br>*******$c*****<br>";

//PHP built-in constants
echo PHP_INT_MAX . '<br>'; //max int in php

//******************************/ 
//Super global variables 
print_r($_SERVER['SERVER_PORT']);
//******************************/  
//Conditional operator
$z = 9;
// $variable_name=(Condition)?true:false
$variable = (5 < $z) ? 'less' : 'greater';
echo "<br>" . $variable . "<br>";
//******************************/  
//for loop
$a = 0;
$b = 0;

for ($i = 0; $i < 5; $i++) {
   $a += 10;  //$a=$a+10
   $b += 5;
}
//a=50, b=25
//******************************/
//while loop
$i = 0;
$num = 50;

while ($i < 10) {
   $num--; //$num=$num-1
   $i++;
}

//i=10 , num=40
//******************************/
//do...while
$i = 0;
$num = 0;

do {
   $i++;
} while ($i < 10);
//num=0 , i=10         
//******************************/
//foreach
$arr = array(1, 2, 3, 4, 5);
// $arr=[1,2,3,4,5];
//arr[0], arr[1] ....         
foreach ($arr as $value) {
   echo "Value is $value <br />";
}
echo "<br>*******************<br>";

//******************************/
//break
$i = 0;

while ($i < 10) {
   $i++;
   echo $i . "<br>";
   if ($i == 3) break;
}
// this loop will stop at i = ??
// i=3
//******************************/
//continue
echo "<br>*******************<br>";


$array = array(1, 2, 3, 4, 5);
foreach ($array as $value) {
   if ($value == 3) {
      continue;
   }
   echo $value . "<br>";
}
// this loop will print $value = ??
// 1 , 2 , 4 , 5

// echo constant(NAME)."<br>";
echo "<br><br>";
echo $_SERVER["SERVER_NAME"] . "<br>";
echo $_SERVER["SERVER_ADDR"] . "<br>";
echo $_SERVER["SERVER_PROTOCOL"] . "<br>";
echo $_SERVER["SCRIPT_FILENAME"] . "<br>";
echo $_SERVER['SCRIPT_NAME'] . "<br>";
echo "<br>*******************<br>";
echo __FILE__ . "<br>";


echo "<br>*******************<br>";


$age = 10;

switch ($age) {
   case $age < 5:
      echo "stay home";
      break;
   case $age == 5:
      echo "go to kg";
      break;
   case $age > 6 && $age < 12:
      echo "go to grade ";
      echo $age - 5;
      break;
      

}
