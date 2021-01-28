<span
    x-data="{
        isDropdownOpen: false,
        openDropdown() { this.isDropdownOpen = true },
        closeDropdown() { this.isDropdownOpen = false },
    }"
    id="shopping-cart"
    class="relative inline-block"
    @click="openDropdown"
>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="cursor-pointer w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
    </svg>
    <span
        class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-semibold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full cursor-pointer"
    >
        {{ count($cart) }}
    </span>

    <div x-show="isDropdownOpen" @click="isDropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

    <div
        @click.away="closeDropdown"
        x-show="isDropdownOpen"
        class="absolute right-0 mt-2 py-2 w-max bg-white rounded-md shadow-xl z-20"
    >
        @foreach($cart as $item)
            <div class="flex flex-row justify-end align-baseline px-4 py-2 text-sm capitalize text-gray-700">
                <span>{{ $item['title'] }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="w-6 h-6 ml-2"
                     wire:click="$emit('removeFromCart', {{ $item['id'] }})"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        @endforeach

        <div class="px-4 py-2 mt-4 text-sm capitalize text-gray-700 flex flex-row justify-between">
            <span class="font-bold mr-2">Total:</span>
            <span>{{ $totalPrice . ' '}} &euro;</span>
        </div>
    </div>
</span>
