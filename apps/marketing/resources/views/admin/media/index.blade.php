@extends('layouts.admin')
@section('title', 'Media')
@section('heading', 'Manage Media')
@section('content')
<form method="post" action="{{ route('admin.media.store') }}" enctype="multipart/form-data">
@csrf
<label>Upload file</label>
<input type="file" name="file" required>
<button class="btn">Upload</button>
</form>

<table><thead><tr><th>File</th><th>Type</th><th>Size</th><th>Path</th><th>Metadata</th><th>Actions</th></tr></thead><tbody>
@foreach($items as $item)
<tr>
<td>{{ $item->file_name }}</td>
<td>{{ $item->media_type }}</td>
<td>{{ $item->size_bytes }}</td>
<td>{{ $item->file_path }}</td>
<td>
<form method="post" action="{{ route('admin.media.update', $item) }}">
@csrf @method('PUT')
<input name="title" value="{{ $item->title }}" placeholder="title">
<input name="alt_text" value="{{ $item->alt_text }}" placeholder="alt text">
<textarea name="caption" rows="2">{{ $item->caption }}</textarea>
<button class="btn">Update metadata</button>
</form>
</td>
<td>
<form method="post" action="{{ route('admin.media.destroy', $item) }}">@csrf @method('DELETE')<button class="btn">Delete</button></form>
</td>
</tr>
@endforeach
</tbody></table>
@endsection
