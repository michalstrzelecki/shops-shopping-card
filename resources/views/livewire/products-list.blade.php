<div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
    @foreach($products as $product)
        <x-product-item :product="$product">
            <x-slot name="title">{{ $product->title }}</x-slot>
            <x-slot name="description">{{ $product->description }}</x-slot>

            <div class="font-semibold text-lg">{{ round(floatval($product->price), 2)  }} &euro;</div>
            <button
                class="bg-white border-2 border-gray-500 hover:border-gray-900 rounded-full px-3 py-2 text-sm font-semibold text-gray-500 hover:text-gray-900"
                wire:click="$emit('addToCart', {{ $product->id }})"
            >
                Add to cart
            </button>
        </x-product-item>
    @endforeach
</div>
