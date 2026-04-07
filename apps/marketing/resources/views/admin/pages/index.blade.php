@extends('layouts.admin')
@section('title', 'Pages')
@section('heading', 'Manage Pages')
@section('content')
<a class="btn" href="{{ route('admin.pages.create') }}">Create Page</a>
<table><thead><tr><th>Title</th><th>Slug</th><th>Status</th><th>Template</th><th>Actions</th></tr></thead><tbody>
@foreach($items as $item)
<tr>
<td>{{ $item->title }}</td><td>{{ $item->slug }}</td><td>{{ $item->status }}</td><td>{{ $item->template }}</td>
<td>
<a class="btn" href="{{ route('admin.pages.edit', $item) }}">Edit</a>
<form class="inline" method="post" action="{{ route('admin.pages.destroy', $item) }}">@csrf @method('DELETE')<button class="btn">Delete</button></form>
</td>
</tr>
@endforeach
</tbody></table>
@endsection
