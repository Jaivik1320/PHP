<?php

require 'dbconnect.php';

$sql = 'SELECT * FROM `trip`';
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo $num;
echo "records are found in database<Br>";
while($row = mysqli_fetch_assoc($result)){
    echo $row['srno']. "Hello".$row['name']." welcome to".$row['dest'];
    echo'<br>';
}


?>