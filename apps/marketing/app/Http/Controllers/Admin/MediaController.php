<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MediaAsset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class MediaController extends Controller
{
    public function index(): View
    {
        return view('admin.media.index', ['items' => MediaAsset::query()->latest()->get()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate(['file' => ['required', 'file', 'max:10240']]);
        $file = $request->file('file');
        $path = $file->store('marketing-media', 'public');

        MediaAsset::query()->create([
            'file_name' => $file->getClientOriginalName(),
            'file_path' => $path,
            'media_type' => str_starts_with((string) $file->getMimeType(), 'image/') ? 'image' : 'file',
            'mime_type' => $file->getMimeType() ?: 'application/octet-stream',
            'size_bytes' => $file->getSize(),
            'alt_text' => '',
            'title' => $file->getClientOriginalName(),
            'caption' => '',
        ]);

        return redirect()->route('admin.media.index');
    }

    public function update(Request $request, MediaAsset $media): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['nullable', 'string', 'max:255'],
            'alt_text' => ['nullable', 'string', 'max:255'],
            'caption' => ['nullable', 'string'],
        ]);

        $media->update($data);
        return redirect()->route('admin.media.index');
    }

    public function destroy(MediaAsset $media): RedirectResponse
    {
        Storage::disk('public')->delete($media->file_path);
        $media->delete();
        return redirect()->route('admin.media.index');
    }
}
