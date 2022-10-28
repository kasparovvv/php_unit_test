<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use App\Person;

final class PersonTest extends TestCase{

    private $person;

    protected function setUp():void{
        $this->person = new Person("Robin");
    }
    
    public function testPersonCanWalk(): void {
        $this->person->walk();
        $this->assertTrue(true);
    }

    public function testPersonCanRun(): void {
        $this->person->run();
        $this->assertTrue(true);
    }
}

?>