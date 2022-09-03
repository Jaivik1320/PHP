<?php
echo"welcome to multidimensional arrays in php<br>";
$muldim = array(
    array(
        array( 5,8,7,9),
        array( 2,9,3,8 ),
        array( 1,8,5,9 ),
        array( 6,4,3,7 )
    ),

    array(
        array( 5,8,7,9),
        array( 2,9,3,8 ),
        array( 1,8,5,9 ),
        array( 6,4,3,7 )
    ),

    array(
        array( 5,8,7,9),
        array( 2,9,3,8 ),
        array( 1,8,5,9 ),
        array( 6,4,3,7 )
    )
);

                for ($i=0; $i < count($muldim) ; $i++) { 
                     
                    for ($j=0; $j <count($muldim[$i]) ; $j++) {
                        
                        for ($k=0; $k < count($muldim[$i][$j]); $k++) { 
                            echo ($muldim[$i][$j][$k]);
                            echo" ";
                        }
                    }
    # code... 
                echo"<br>";
                 }
                 

        # code...
$arr = array('cars','boat','train');
arsort($arr);

$clength = count($arr);
for ($i=0; $i < $clength; $i++) { 
    # code...
    echo $arr[$i];
    echo '<br>';
}




?>