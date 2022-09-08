<?php
echo " Welcome to write files";

$fptr = fopen('jaivikfile2.txt','w');
fwrite($fptr, "I am always right\n");
fwrite($fptr, "I am always right\n");
fwrite($fptr, "I am always right");

fclose($fptr);

?>