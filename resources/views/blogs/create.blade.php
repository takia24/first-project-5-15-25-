@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto p-4 bg-white shadow-lg rounded-lg">
        <h1 class="text-3xl font-semibold text-center mb-6">Create Blog</h1>

        <form method="POST" action="{{ route('blogs.store') }}">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" name="title" class="w-full p-3 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" class="w-full p-3 border border-gray-300 rounded-md" rows="5" required></textarea>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-md hover:bg-blue-600 transition duration-200">Submit</button>
        </form>
    </div>
@endsection
