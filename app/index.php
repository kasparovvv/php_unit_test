<?php

require '../vendor/autoload.php';


// ./vendor/bin/phpunit --testdox

$person = new App\Person("Robin");
echo $person->walk();

?>