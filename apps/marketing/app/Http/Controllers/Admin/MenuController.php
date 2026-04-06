<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MenuController extends Controller
{
    public function index(): View
    {
        return view('admin.menus.index', ['items' => Menu::query()->latest()->get()]);
    }

    public function create(): View
    {
        return view('admin.menus.form', ['item' => new Menu(['items_json' => '[]'])]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:50'],
            'items_json' => ['required', 'json'],
        ]);
        Menu::query()->create($data);

        return redirect()->route('admin.menus.index');
    }

    public function edit(Menu $menu): View
    {
        return view('admin.menus.form', ['item' => $menu]);
    }

    public function update(Request $request, Menu $menu): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:50'],
            'items_json' => ['required', 'json'],
        ]);
        $menu->update($data);

        return redirect()->route('admin.menus.index');
    }

    public function destroy(Menu $menu): RedirectResponse
    {
        $menu->delete();
        return redirect()->route('admin.menus.index');
    }
}
