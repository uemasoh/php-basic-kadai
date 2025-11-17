<?php
class Food {
  private $name;
  private $price;
  public function show_price() {
    echo $this -> price."<br>";
  }
  public function __construct($name,$price){
    $this ->name = $name;
    $this ->price = $price;
  }
}
$food = new Food("potato",250);
print_r($food);
$food->show_price();

class Animal {
  private $name;
  private $height;
  private $weight;
  public function show_height($height) {
    echo $this -> height."<br>";
  }
  public function __construct($name,$height,$weight){
    $this ->name = $name;
    $this ->price = $height;
    $this ->weight = $weight;
  }
 
}
$animal = new Animal("dog",60,5000);
print_r($animal);
$animal->show_height();
?>