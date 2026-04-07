@extends('layouts.admin')
@section('title', 'Posts')
@section('heading', 'Manage Articles')
@section('content')
<a class="btn" href="{{ route('admin.posts.create') }}">Create Article</a>
<table><thead><tr><th>Title</th><th>Slug</th><th>Status</th><th>Author</th><th>Actions</th></tr></thead><tbody>
@foreach($items as $item)
<tr>
<td>{{ $item->title }}</td><td>{{ $item->slug }}</td><td>{{ $item->status }}</td><td>{{ $item->author_name }}</td>
<td>
<a class="btn" href="{{ route('admin.posts.edit', $item) }}">Edit</a>
<form class="inline" method="post" action="{{ route('admin.posts.destroy', $item) }}">@csrf @method('DELETE')<button class="btn">Delete</button></form>
</td>
</tr>
@endforeach
</tbody></table>
@endsection
