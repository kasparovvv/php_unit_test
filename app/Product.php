<?php
namespace App;

class Product{

    public string $name; 
    public float $price; 

    function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
    }

    public function getProduct(){
        $product = array(
            "name"=>$this->name,
            "price"=>$this->price
        );
        return $product;
    }

}




?>