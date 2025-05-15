@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto p-4 bg-white shadow-lg rounded-lg">
        <h1 class="text-3xl font-semibold text-center mb-6">Edit Blog</h1>

        <form method="POST" action="{{ route('blogs.update', $blog->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" name="title" class="w-full p-3 border border-gray-300 rounded-md" value="{{ $blog->title }}" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" class="w-full p-3 border border-gray-300 rounded-md" rows="5" required>{{ $blog->description }}</textarea>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-md hover:bg-blue-600 transition duration-200">Update</button>
        </form>
    </div>
@endsection

