<!DOCTYPE html>
<html>
    <head>
        <title>Fibonacii Series</title>
</head>
    <body>
        <form method="post">
            Enter the number:
            <input type="number" name="num" />
            <input type="submit">
</form>
</body>

<?php
if ($_POST){
    $num = $_POST['num'];
    
    $n1=0;
    $n2=1;
    

    echo 'Fibonacci series:';
    echo $n1;
    

    for($i = 0;$i < $num ;$i++)
    {
        $n3 = $n1 + $n2;
        echo $n3."<br>";
        $n1 = $n2;
        $n2 = $n3;

        


    }
}
?>
</html>
