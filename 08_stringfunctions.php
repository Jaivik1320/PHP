<?php
$name = 'jaivik parekh';
echo $name;
echo '<br>';
echo "the lenght of the string is " . strlen($name);
echo'<br>';
echo ' the word count of the string is '.str_word_count($name);
echo'<br>';
echo ' the reverse of the string is '. strrev($name);
echo'<br>';
echo ' The search for the string is '. strpos($name,"r");
echo'<br>';
echo ' the replace for the string is '. str_replace('jaivik','patel',$name);
echo'<br>';
//echo ' the repeat for the string is '. str_repeat($name,500);
//echo'<br>';
echo rtrim("<pre>   <h1>I am Jp</h1>   </pre>");
echo'<br>';
$j = 10.7688;
var_dump(is_float($j));
echo'<br>';
$h = 1.9e533;
var_dump($h);
echo'<br>';

$x = 5875;
var_dump(is_numeric($x));
echo"<br>";
$x = 'hello';
var_dump(is_numeric($x));
echo'<br>';

// casting String and floats to integers
$x = "2433.766";
$int_cast = (int)$x;
echo $int_cast;
echo'<br>';

//pie functions
echo(pi());
echo'<br>';
// min() and max()
echo(min(0,-4,7,-9));
echo'<br>';
echo(max(3,99,-88,3838));
echo'<br>';
//abs() function
echo(abs(-9.88));
echo'<br>';
// square function
echo(sqrt(81));
echo'<br>';
// round function
echo(round(6.60));
echo'<br>';
//random numbers
echo(rand());
echo'<br>';
// constant
define('Greetings'," Welcome to JP Company");
echo Greetings;
echo'<br>';
//constant in arrays
define("cars",["Porsce", 'Mustang', "Mercedes"]);
echo cars[1];   

?>