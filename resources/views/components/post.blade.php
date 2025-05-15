<div {{ $attributes->merge(['class' => 'bg-white shadow-md rounded-lg p-4 border-l-4 border-blue-400']) }}>
    <h2 class="text-xl font-semibold mb-2 text-blue-700">{{ $title }}</h2>
    <p class="text-gray-700">{{ $slot }}</p>
</div>
