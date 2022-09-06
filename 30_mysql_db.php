<?php
$servername='localhost';
$username = 'root';
$password='';
$database="dbjaivik";

//Create a connection object
$conn= mysqli_connect($servername,$username,$password);

//create a db
$sql=" CREATE DATABASE dbjaivik";
$result = mysqli_query($conn, $sql);
echo "the result is";
echo var_dump($result);

//die if connection is not successful
if(!$conn){
    die("Sorry we failed to die:" .mqsqli_connect_error());
}
else{
echo'Connection was successful';
}
$name ="Jaivik";
$sql = "INSERT INTO `trip` ( `name`, `dest`) VALUES ( 'tp', 'usa')";
$result = mysqli_query($conn, $sql);
// add a new trip to trip table

if($result){
    echo" The record is successfully created";
}
else{
    echo" The record is not sucessfully created" .mysqli_error($conn);
}

?>