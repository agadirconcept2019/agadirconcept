@extends('layouts.admin')
@section('title', 'Post Form')
@section('heading', $item->exists ? 'Edit Article' : 'Create Article')
@section('content')
<form method="post" action="{{ $item->exists ? route('admin.posts.update', $item) : route('admin.posts.store') }}">
@csrf
@if($item->exists) @method('PUT') @endif
<label>Title</label><input name="title" value="{{ old('title', $item->title) }}" required>
<label>Slug</label><input name="slug" value="{{ old('slug', $item->slug) }}">
<label>Status</label><input name="status" value="{{ old('status', $item->status ?: 'draft') }}" required>
<label>Author</label><input name="author_name" value="{{ old('author_name', $item->author_name ?: 'Admin') }}" required>
<label>Excerpt</label><textarea name="excerpt" rows="4">{{ old('excerpt', $item->excerpt) }}</textarea>
<label>Body</label><textarea name="body" rows="8">{{ old('body', $item->body) }}</textarea>
<button class="btn">Save</button>
</form>
@endsection
