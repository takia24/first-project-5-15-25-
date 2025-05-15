<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gradient-to-r from-teal-100 via-cyan-100 to-blue-100 font-sans">

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 p-6">

        <!-- Yellow Box (static div) -->
        <div class="bg-white p-6 rounded-xl shadow-lg border border-yellow-300">
            <h2 class="text-xl font-semibold text-yellow-800">Error Details</h2>
            <p class="text-yellow-700 mt-2">Some text</p>
        </div>

        <!-- Maroon Box (static div) -->
        <div class="bg-white p-6 rounded-xl shadow-lg border border-red-900">
            <h2 class="text-xl font-semibold text-red-900">Maroon Box</h2>
            <p class="text-red-800 mt-2">Some maroon text</p>
        </div>

        <!-- Violet Box (static div) -->
        <div class="bg-white p-6 rounded-xl shadow-lg border border-purple-500">
            <h2 class="text-xl font-semibold text-purple-700">Violet Box</h2>
            <p class="text-purple-600 mt-2">Some violet text</p>
        </div>

        <!-- Dynamic x-card components -->
        <x-card title="Error Details" class="border-yellow-400 text-yellow-700">
            Some error details text goes here.
        </x-card>

        <x-card title="Card Title" class="border-pink-400 text-pink-700">
            Some pink box text.
        </x-card>

        <!-- Dynamic x-post components -->
        <x-post title="Post Title" class="bg-blue-50">
            This is some content for the post.
        </x-post>

        <x-post title="Another Post" class="bg-green-50 border-green-400 text-green-700">
            Content for another post.
        </x-post>

    </div>

</>
</html>
