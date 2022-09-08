<?php

//$a= readfile('jaivikfile.txt');
//echo $a;
//readfile('jaivikfile.txt');
//readfile('harnoor.png');

$fptr = fopen('jaivikfile.txt', 'r',);
$content = fread($fptr, filesize("jaivikfile.txt"));
echo $content;
fclose($fptr);


?>