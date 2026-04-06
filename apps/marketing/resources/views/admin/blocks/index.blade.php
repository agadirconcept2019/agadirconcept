@extends('layouts.admin')
@section('title', 'Reusable Blocks')
@section('heading', 'Manage Reusable Blocks')
@section('content')
<a class="btn" href="{{ route('admin.blocks.create') }}">Create Block</a>
<table><thead><tr><th>Name</th><th>Type</th><th>Status</th><th>Version</th><th>Actions</th></tr></thead><tbody>
@foreach($items as $item)
<tr>
<td>{{ $item->name }}</td><td>{{ $item->block_type }}</td><td>{{ $item->status }}</td><td>{{ $item->version }}</td>
<td>
<a class="btn" href="{{ route('admin.blocks.edit', $item) }}">Edit</a>
<form class="inline" method="post" action="{{ route('admin.blocks.destroy', $item) }}">@csrf @method('DELETE')<button class="btn">Delete</button></form>
</td>
</tr>
@endforeach
</tbody></table>
@endsection
