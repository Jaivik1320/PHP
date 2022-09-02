<?php
$connection = new mysqli('localhost','root','','dbplaces');
if(!$connection){
    die("Error in connection".$connection->connect_error);
}

?>