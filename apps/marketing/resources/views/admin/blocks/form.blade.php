@extends('layouts.admin')
@section('title', 'Reusable Block Form')
@section('heading', $item->exists ? 'Edit Block' : 'Create Block')
@section('content')
<form method="post" action="{{ $item->exists ? route('admin.blocks.update', $item) : route('admin.blocks.store') }}">
@csrf
@if($item->exists) @method('PUT') @endif
<label>Name</label><input name="name" value="{{ old('name', $item->name) }}" required>
<label>Block type</label><input name="block_type" value="{{ old('block_type', $item->block_type ?: 'cta') }}" required>
<label>Status</label><input name="status" value="{{ old('status', $item->status ?: 'draft') }}" required>
<label>Version</label><input type="number" name="version" value="{{ old('version', $item->version ?: 1) }}" min="1" required>
<label>Payload JSON</label><textarea name="payload_json" rows="10" required>{{ old('payload_json', $item->payload_json ?: '{}') }}</textarea>
<button class="btn">Save</button>
</form>
@endsection
