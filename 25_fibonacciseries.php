<DOCTYPE html>
    <html>
    <body>
    <h1>Fibonacii Series</h1>
    <?php
    $t=0;
    $t1=1;
    $t2=0;
    for($i=0; $i < 50; $i++){
        echo $t. '<br>';
        $t = $t1 + $t2;
        $t1 = $t2;
        $t2 = $t;

    }
    ?>
    </body>
    </html>