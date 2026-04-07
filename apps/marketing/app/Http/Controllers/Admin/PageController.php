<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        return view('admin.pages.index', ['items' => Page::query()->latest()->get()]);
    }

    public function create(): View
    {
        return view('admin.pages.form', ['item' => new Page()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:50'],
            'template' => ['required', 'string', 'max:50'],
            'body' => ['nullable', 'string'],
            'seo_title' => ['nullable', 'string', 'max:255'],
            'seo_description' => ['nullable', 'string'],
        ]);
        $data['slug'] = Str::slug($data['slug'] ?: $data['title']);
        Page::query()->create($data);

        return redirect()->route('admin.pages.index');
    }

    public function edit(Page $page): View
    {
        return view('admin.pages.form', ['item' => $page]);
    }

    public function update(Request $request, Page $page): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:50'],
            'template' => ['required', 'string', 'max:50'],
            'body' => ['nullable', 'string'],
            'seo_title' => ['nullable', 'string', 'max:255'],
            'seo_description' => ['nullable', 'string'],
        ]);
        $data['slug'] = Str::slug($data['slug'] ?: $data['title']);
        $page->update($data);

        return redirect()->route('admin.pages.index');
    }

    public function destroy(Page $page): RedirectResponse
    {
        $page->delete();
        return redirect()->route('admin.pages.index');
    }
}
