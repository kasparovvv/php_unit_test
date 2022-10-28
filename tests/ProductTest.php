<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use App\Product;

final class ProductTest extends TestCase{

    private $product;

    protected  function setUp() :void{
        $this->product = new Product("Tv",1200);
    }
    
    public function testSetProductName(): void {
        $this->assertSame('Tv',$this->product->getName());
    }

    public function testSetProductPrice(): void {
        $this->assertSame(floatval(1200),   $this->product->getPrice());
    }

}

?>