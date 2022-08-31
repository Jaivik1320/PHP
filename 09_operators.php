<?php
//Operators in PHP
// Arithematic Operators
$a = 13;
$b = 10;
echo "the result is " .($a + $b);
echo'<br>';

$a = 13;
$b = 10;
echo $a * $b;
echo'<br>';

$a = 13;
$b = 10;
echo $a ** $b;
echo'<br>';

//Assignment Operators

$a *= 200;
echo "for a, the value is ".$a."<br>";
echo'<br>'; 
//Comparison Operators
$x = 7;
$y = 12;
echo " for x<>y, the result is ";
echo var_dump($x<>$y);
echo "<br>";
// identical comparison operators
echo " for x===y, the result is ";
echo var_dump($x===$y);
echo "<br>";
// Not equal
echo " for x!=y, the result is ";
echo var_dump($x!=$y);
echo "<br>";
// greater than
echo " for x>=y, the result is ";
echo var_dump($x>=$y);
echo "<br>";
// spaceship operators
echo " for x<=>y, the result is ";
echo var_dump($x<=>$y);
echo "<br>";

//Logical operators
$m = true;
$n = false;
echo " for m and n, the result is ";
echo var_dump($m and $n);
echo "<br>";
// xor
echo " for m xor n, the result is ";
echo var_dump($m xor $n);
echo "<br>";
// && and 
echo " for m && n, the result is ";
echo var_dump($m && $n);
echo "<br>";
//String operators
echo " for m and n, the result is ";
echo var_dump($m.$n);
echo "<br>";
//concatenation assignment
echo " for m and n, the result is ";
echo var_dump($m.=$n);
echo "<br>";


?>