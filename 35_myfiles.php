<?php
$fptr = fopen('jaivikfile.txt', 'r');
/*echo fgets($fptr);
echo"<br>";
echo fgets($fptr);
echo var_dump(fgets($fptr));
*/
/*
// Reading a file line by line
*/
//Reading a file character by character
echo fgetc($fptr);
while($a =fgetc($fptr)){
    echo $a;
    break;
}
echo "End of the file";
?>
