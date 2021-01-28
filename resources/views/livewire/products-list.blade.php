<div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
    @foreach($products as $product)
        <div class="flex flex-col rounded overflow-hidden shadow-lg">
            <img class="w-full" src="{{ 'https://loremflickr.com/320/240?random=' . $product->id }}" alt="{{ $product->title }}">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $product->title }}</div>
                <p class="text-gray-500 text-base">{{ $product->description }}</p>
            </div>
            <div class="px-6 py-4 mt-auto flex justify-between items-baseline">
                <div class="font-semibold text-lg">{{ round(floatval($product->price), 2)  }} &euro;</div>
                <button
                    class="bg-white border-2 border-gray-500 hover:border-gray-900 rounded-full px-3 py-2 text-sm font-semibold text-gray-500 hover:text-gray-900"
                    wire:click="$emit('addToCart', {{ $product->id }})"
                >
                    Add to cart
                </button>
            </div>
        </div>
    @endforeach
</div>
