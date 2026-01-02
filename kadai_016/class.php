<?php
class Food {
    private $name;
    private $price;

    public function __construct(string $name,int $price) {
      $this->name = $name;
      $this->price = $price;
    }

    public function show_price() {
      echo $this->price . PHP_EOL;
    }
}
class Animal {
    private $name;
    private $height; 
    private $weight;

    public function __construct(string $name,int $height,int $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }

    public function show_height() {
        echo $this->height . PHP_EOL;
    }
  }

$food = new Food('りんご', 150);
$animal = new Animal('いぬ', 60, 5000);

print_r($food);
print_r($animal);

$food->show_price();
$animal->show_height();
?>