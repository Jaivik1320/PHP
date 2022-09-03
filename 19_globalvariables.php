<?php

echo " Welcome to global variables<br>";
$a = 14;
$b = 88;
function printvalue(){
   global $a, $b;
    echo "The value of variable is $a and $b <br>";
}

echo $a, $b;
printvalue();

echo var_dump($GLOBALS['a']);
echo var_dump($GLOBALS['b']);
echo'<br>';
echo $_SERVER['PHP_SELF'];
echo'<br>';     
echo $_SERVER['SERVER_ADMIN'];
echo"<br>";
echo $_SERVER['SERVER_SIGNATURE'];
echo'<br>';
echo $_SERVER['SCRIPT_NAME'];


?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
Name: <input type="text" name="fname">
<input type="submit">
</form>
<?php                                           // Request method in global variables
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
      echo "Jaivik";
    } else {
      echo $name;
    }
  }
?>