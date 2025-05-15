<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $blogs = Blog::latest()->get();
        return view('blogs.index', compact('blogs'));
    }

    public function create(): View
    {
        return view('blogs.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Blog::create($validated);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    public function show(Blog $blog): View
    {
        return view('blogs.show', compact('blog'));
    }

    public function edit(Blog $blog): View
    {
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $blog->update($validated);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog): RedirectResponse
    {
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
