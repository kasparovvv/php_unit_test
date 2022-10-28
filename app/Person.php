<?php
namespace App;


class Person{
    public string $name; 

    function __construct($name){
        $this->name = $name;
    }

    public function walk(){
        return $this->name ." is walking";
    }

    public function run(){
        return $this->name ." is running";
    }
}





?>