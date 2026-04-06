<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ReusableBlock;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReusableBlockController extends Controller
{
    public function index(): View
    {
        return view('admin.blocks.index', ['items' => ReusableBlock::query()->latest()->get()]);
    }

    public function create(): View
    {
        return view('admin.blocks.form', ['item' => new ReusableBlock(['status' => 'draft', 'version' => 1, 'payload_json' => '{}'])]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'block_type' => ['required', 'string', 'max:50'],
            'status' => ['required', 'string', 'max:50'],
            'payload_json' => ['required', 'json'],
            'version' => ['required', 'integer', 'min:1'],
        ]);
        ReusableBlock::query()->create($data);

        return redirect()->route('admin.blocks.index');
    }

    public function edit(ReusableBlock $block): View
    {
        return view('admin.blocks.form', ['item' => $block]);
    }

    public function update(Request $request, ReusableBlock $block): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'block_type' => ['required', 'string', 'max:50'],
            'status' => ['required', 'string', 'max:50'],
            'payload_json' => ['required', 'json'],
            'version' => ['required', 'integer', 'min:1'],
        ]);
        $block->update($data);

        return redirect()->route('admin.blocks.index');
    }

    public function destroy(ReusableBlock $block): RedirectResponse
    {
        $block->delete();
        return redirect()->route('admin.blocks.index');
    }
}
