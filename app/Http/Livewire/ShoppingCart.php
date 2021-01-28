<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Arr;
use Livewire\Component;

class ShoppingCart extends Component
{
    public $cart = [];

    public $totalPrice = 0;

    protected $listeners = [
        'addToCart' => 'onAddToCart',
        'removeFromCart' => 'onRemoveFromCart'
    ];

    public function onAddToCart(Product $product) {
        $this->totalPrice = $this->totalPrice + $this->formatPrice($product->price);
        $this->cart[] = $product->toArray();
    }

    public function onRemoveFromCart(int $id) {
        $itemKey = null;
        foreach ($this->cart as $key => $item) {
            if ($item['id'] === $id) {
                $itemKey = $key;
                break;
            }
        }

        $this->totalPrice = $this->totalPrice - $this->formatPrice($this->cart[$itemKey]['price']);
        unset($this->cart[$itemKey]);
    }

    private function formatPrice(float $price) {
        return round(floatval($price), 2);
    }

    public function render()
    {
        return view('livewire.shopping-cart');
    }
}
