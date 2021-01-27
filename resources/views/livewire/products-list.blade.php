<div x-data="{ products: {{ $products }} }">
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        <template x-for="product in products" :key="product.id">
            <div class="flex flex-col rounded overflow-hidden shadow-lg">
                <img class="w-full" x-bind:src="`https://loremflickr.com/320/240?random=${product.id}`" x-bind:alt="product.title">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2" x-text="product.title"></div>
                    <p class="text-gray-500 text-base" x-text="product.description"></p>
                </div>
                <div class="px-6 py-4 mt-auto flex justify-between items-baseline">
                    <div class="font-semibold text-lg" x-text="`${product.price} &euro;`"></div>
                    <button
                        class="bg-white border-2 border-gray-500 hover:border-gray-900 rounded-full px-3 py-2 text-sm font-semibold text-gray-500 hover:text-gray-900"
                        @click="$dispatch('add-to-cart', { productId: product.id })"
                    >
                        Add to cart
                    </button>
                </div>
            </div>
        </template>
    </div>
</div>
