<?php
//echo" Welcome to MYSQL<br>";

/* There are 2 types:-
1. MYSQLi
2. PDO (php data objects)
*/
$servername='localhost';
$username = 'root';
$password='';
$database='dbjaivik';
//Create a connection object
$conn= mysqli_connect($servername,$username,$password,$database);

//die if connection is not successful
if(!$conn){
    die("Sorry we failed to die:" .mqsqli_connect_error());
}
echo'Connection was successful<br>';
?>