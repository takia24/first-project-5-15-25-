@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <div class="w-full max-w-4xl bg-white p-10 rounded-xl shadow-xl text-center">
        <h1 class="text-5xl font-bold text-indigo-700 mb-10">📚 Blog Posts</h1>

        <a href="{{ route('blogs.create') }}"
           class="inline-block mb-8 bg-indigo-600 text-white text-lg px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
            + Create New
        </a>

        @if(session('success'))
            <div class="mb-8 bg-green-100 text-green-800 text-lg py-3 px-5 rounded shadow">
                {{ session('success') }}
            </div>
        @endif

        @if($blogs->isEmpty())
            <p class="text-xl text-gray-600">No blogs found.</p>
        @else
            <div class="space-y-6">
                @foreach($blogs as $blog)
                    <div class="bg-blue-50 border border-blue-200 p-6 rounded-lg shadow text-center">
                        <h2 class="text-2xl font-semibold text-blue-800 mb-4">{{ $blog->title }}</h2>
                        <div class="flex justify-center gap-4 flex-wrap">
                            <a href="{{ route('blogs.show', $blog->id) }}"
                               class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 text-base">View</a>
                            <a href="{{ route('blogs.edit', $blog->id) }}"
                               class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-500 text-base">Edit</a>
                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 text-base">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection
