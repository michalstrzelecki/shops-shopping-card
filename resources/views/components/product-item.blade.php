<div class="flex flex-col rounded overflow-hidden shadow-lg">
    <img class="w-full" src="{{ 'https://loremflickr.com/320/240?random=' . $product->id }}" alt="{{ $product->title }}">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $title }}</div>
        <p class="text-gray-500 text-base">{{ $description }}</p>
    </div>
    <div class="px-6 py-4 mt-auto flex justify-between items-baseline">
        {{ $slot }}
    </div>
</div>
