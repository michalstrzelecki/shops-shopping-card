<?php

namespace Tests\Feature;

use App\Models\Product;
use Tests\TestCase;

class ProductFactoryTest extends TestCase
{
    /**
     * Check product factory creates an item.
     *
     * @return void
     */
    public function testCreatesProductItem()
    {
        $this->assertCount(0, Product::all());

        $product = Product::factory()->create();

        $this->assertCount(1, Product::all());
        $this->assertSame($product->title, Product::all()->first()->title);
    }
}
