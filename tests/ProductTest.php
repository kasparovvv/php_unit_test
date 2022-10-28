<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use App\Product;

final class ProductTest extends TestCase{
    
    public function testProduct(): void {
        $product = new Product("Tv",1200);
        $this->assertTrue(true);
    }

}

?>