<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use App\Person;

final class PersonTest extends TestCase{
    
    public function testPersonCanWalk(): void {
        $person =   new Person("Robin");
        $person->walk();
        $this->assertTrue(true);
    }

    public function testPersonCanRun(): void {
        $person =   new Person("Robin");
        $person->run();
        $this->assertTrue(true);
    }
}

?>