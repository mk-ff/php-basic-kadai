<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
   <?php

   class Food {
    private $name;
    private $price;

    public function __construct($name, $price) {
      $this->name = $name;
      $this->price = $price;
    }

    public function getName() {
      return $this->name;
    }

    public function getPrice() {
      echo $this->price;
    }

   }




   class Animal {
    private $name;
    private $height;
    private $weight;

    public function __construct($name, $height, $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }

    public function getName() {
      return $this->name;
    }
    public function getHeight() {
      echo $this->height;
    }
    public function getWeight() {
      return $this->weight;
    }

   }

   $food = new Food('potato', 250);
   $animal = new Animal('dog', 60, 5000);

   print_r($food);
   echo '<br>';
   print_r($animal); 
   echo '<br>';


$food-> getPrice();
   echo '<br>';

$animal-> getHeight();

   ?>
  </p>
  
</body>
</html>