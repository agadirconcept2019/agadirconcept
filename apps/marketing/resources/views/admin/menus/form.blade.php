@extends('layouts.admin')
@section('title', 'Menu Form')
@section('heading', $item->exists ? 'Edit Menu' : 'Create Menu')
@section('content')
<form method="post" action="{{ $item->exists ? route('admin.menus.update', $item) : route('admin.menus.store') }}">
@csrf
@if($item->exists) @method('PUT') @endif
<label>Name</label><input name="name" value="{{ old('name', $item->name) }}" required>
<label>Location</label><input name="location" value="{{ old('location', $item->location ?: 'main') }}" required>
<label>Items JSON</label><textarea name="items_json" rows="12" required>{{ old('items_json', $item->items_json ?: '[]') }}</textarea>
<button class="btn">Save</button>
</form>
@endsection
