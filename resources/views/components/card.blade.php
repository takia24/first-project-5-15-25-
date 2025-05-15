<div {{ $attributes->merge(['class' => 'bg-white shadow-md rounded-lg p-4 border']) }}>
    <h2 class="text-xl font-bold mb-2">{{ $title }}</h2>
    <p class="text-gray-700">{{ $slot }}</p>
</div>
