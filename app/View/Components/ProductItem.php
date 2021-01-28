<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class ProductItem extends Component
{
    /**
     * @var Product
     */
    public $product;

    /**
     * Create a new component instance.
     *
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.product-item');
    }
}
