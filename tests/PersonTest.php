<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase{
    
    public function testPersonCanWalk(): void {
        $person =   new App\Person("Robin");
        $person->walk();
        $this->assertTrue(true);
    }

    public function testPersonCanRun(): void {
        $person =   new App\Person("Robin");
        $person->run();
        $this->assertTrue(true);
    }
}

?>