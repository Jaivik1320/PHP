<?php
$x= true;
$y= false;
echo $x;
echo '<br>';
echo var_dump($y);
echo '<br>';

$jaivik = array("Anuj","Bhavin","Tithi","rinkal");
echo var_dump($jaivik[2]);
echo $jaivik[1];
echo'<br>';

$name = "Hello world";
$name = NULL;
var_dump ($name);
echo'<br>';

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();
?>