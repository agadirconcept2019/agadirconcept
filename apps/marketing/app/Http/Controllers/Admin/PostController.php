<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        return view('admin.posts.index', ['items' => Post::query()->latest()->get()]);
    }

    public function create(): View
    {
        return view('admin.posts.form', ['item' => new Post(['author_name' => 'Admin'])]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:50'],
            'excerpt' => ['nullable', 'string'],
            'body' => ['nullable', 'string'],
            'author_name' => ['required', 'string', 'max:100'],
        ]);
        $data['slug'] = Str::slug($data['slug'] ?: $data['title']);
        Post::query()->create($data);

        return redirect()->route('admin.posts.index');
    }

    public function edit(Post $post): View
    {
        return view('admin.posts.form', ['item' => $post]);
    }

    public function update(Request $request, Post $post): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:50'],
            'excerpt' => ['nullable', 'string'],
            'body' => ['nullable', 'string'],
            'author_name' => ['required', 'string', 'max:100'],
        ]);
        $data['slug'] = Str::slug($data['slug'] ?: $data['title']);
        $post->update($data);

        return redirect()->route('admin.posts.index');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}
