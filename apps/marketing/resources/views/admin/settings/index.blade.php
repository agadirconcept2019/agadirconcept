@extends('layouts.admin')
@section('title', 'Settings')
@section('heading', 'Manage Global Settings')
@section('content')
<form method="post" action="{{ route('admin.settings.store') }}">
@csrf
<label>Group name</label><input name="group_name" required>
<label>Key name</label><input name="key_name" required>
<label>Value JSON</label><textarea name="value_json" rows="6" required>{"value":""}</textarea>
<button class="btn">Save Setting</button>
</form>

<table><thead><tr><th>Group</th><th>Key</th><th>Value JSON</th><th>Actions</th></tr></thead><tbody>
@foreach($items as $item)
<tr>
<td>{{ $item->group_name }}</td><td>{{ $item->key_name }}</td><td><pre>{{ $item->value_json }}</pre></td>
<td><form method="post" action="{{ route('admin.settings.destroy', $item) }}">@csrf @method('DELETE')<button class="btn">Delete</button></form></td>
</tr>
@endforeach
</tbody></table>
@endsection
