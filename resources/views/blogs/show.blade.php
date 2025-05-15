@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto p-4 bg-white shadow-lg rounded-lg">
        <div class="card">
            <div class="card-header bg-gray-200 p-4 rounded-t-lg">
                <h4 class="text-2xl font-semibold">{{ $blog->title }}</h4>
            </div>
            <div class="card-body p-4">
                <p class="text-gray-700">{{ $blog->description }}</p>
            </div>
            <div class="card-footer bg-gray-200 p-4 rounded-b-lg text-center">
                <a href="{{ route('blogs.index') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200">Back to Blog List</a>
            </div>
        </div>
    </div>
@endsection
