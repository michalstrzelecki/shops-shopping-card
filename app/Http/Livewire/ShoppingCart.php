<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Arr;
use Livewire\Component;

class ShoppingCart extends Component
{
    public $cart = [];

    public $totalPrice = 0;

    public function addProduct(Product $product) {
        $this->totalPrice = $this->totalPrice + round(floatval($product->price), 2);
        $this->cart[] = $product->toArray();
    }

    public function removeProduct(int $index) {
        $this->totalPrice = $this->totalPrice - round(floatval($this->cart[$index]['price']), 2);
        $this->cart = Arr::except($this->cart, [$index]);
    }

    public function render()
    {
        return view('livewire.shopping-cart');
    }
}
