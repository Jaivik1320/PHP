<?php
function avgmarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        # code...
        $sum += $value;
        $i++;
    }
    return $sum/$i;
        # code...
    }
$anuj = [56,78,99,45,67];
//$summarks = processmarks($anuj);
$summarks = avgmarks($anuj);

$jaivik = [98,99,87,77,67];
//$summarksjaivik = processmarks($jaivik);
$summarksjaivik = avgmarks($jaivik);
echo " total marks scored by anuj out of 500 is $summarks";
echo'<br>';
echo " total marks scored by jaivik out of 500 is $summarksjaivik";
echo"<br>";


function familyname($fname, $year){
    echo " $fname was born in $year <br> ";
}
familyname("parekh", 1988);

familyname("Patel", 1982);






function add_value(&$value){
    $value +=5;
}
$num = 2;
add_value($num);
echo $num;




?>
