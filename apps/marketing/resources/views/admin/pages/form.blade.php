@extends('layouts.admin')
@section('title', 'Page Form')
@section('heading', $item->exists ? 'Edit Page' : 'Create Page')
@section('content')
<form method="post" action="{{ $item->exists ? route('admin.pages.update', $item) : route('admin.pages.store') }}">
@csrf
@if($item->exists) @method('PUT') @endif
<label>Title</label><input name="title" value="{{ old('title', $item->title) }}" required>
<label>Slug</label><input name="slug" value="{{ old('slug', $item->slug) }}">
<label>Status</label><input name="status" value="{{ old('status', $item->status ?: 'draft') }}" required>
<label>Template</label><input name="template" value="{{ old('template', $item->template ?: 'default') }}" required>
<label>Body</label><textarea name="body" rows="8">{{ old('body', $item->body) }}</textarea>
<label>SEO Title</label><input name="seo_title" value="{{ old('seo_title', $item->seo_title) }}">
<label>SEO Description</label><textarea name="seo_description" rows="4">{{ old('seo_description', $item->seo_description) }}</textarea>
<button class="btn">Save</button>
</form>
@endsection
