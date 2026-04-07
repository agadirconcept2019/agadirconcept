<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingController extends Controller
{
    public function index(): View
    {
        return view('admin.settings.index', ['items' => Setting::query()->orderBy('group_name')->orderBy('key_name')->get()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'group_name' => ['required', 'string', 'max:100'],
            'key_name' => ['required', 'string', 'max:100'],
            'value_json' => ['required', 'json'],
        ]);

        Setting::query()->updateOrCreate(
            ['group_name' => $data['group_name'], 'key_name' => $data['key_name']],
            ['value_json' => $data['value_json']]
        );

        return redirect()->route('admin.settings.index');
    }

    public function destroy(Setting $setting): RedirectResponse
    {
        $setting->delete();
        return redirect()->route('admin.settings.index');
    }
}
