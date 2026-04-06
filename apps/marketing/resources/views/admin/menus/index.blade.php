@extends('layouts.admin')
@section('title', 'Menus')
@section('heading', 'Manage Menus')
@section('content')
<a class="btn" href="{{ route('admin.menus.create') }}">Create Menu</a>
<table><thead><tr><th>Name</th><th>Location</th><th>Items JSON</th><th>Actions</th></tr></thead><tbody>
@foreach($items as $item)
<tr>
<td>{{ $item->name }}</td><td>{{ $item->location }}</td><td><pre>{{ $item->items_json }}</pre></td>
<td>
<a class="btn" href="{{ route('admin.menus.edit', $item) }}">Edit</a>
<form class="inline" method="post" action="{{ route('admin.menus.destroy', $item) }}">@csrf @method('DELETE')<button class="btn">Delete</button></form>
</td>
</tr>
@endforeach
</tbody></table>
@endsection
