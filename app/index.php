<?php

require '../vendor/autoload.php';


// ./vendor/bin/phpunit --testdox

$person = new App\Person("Robin");
echo $person->walk();

// $product = new App\Product("Tv",1200);
// var_dump($product->getProduct());

// $product2 = new App\Product("Car",12200);
// var_dump($product2->getProduct());

?>