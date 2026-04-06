<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <style>
        body{font-family:Arial,sans-serif;margin:40px auto;max-width:520px;line-height:1.4}
        input{width:100%;padding:10px;margin:4px 0 12px}
        button{padding:8px 14px}
        .errors{background:#ffecec;border:1px solid #e00;padding:10px;margin-bottom:12px}
    </style>
</head>
<body>
<h1>Marketing CMS Admin Login</h1>
@if ($errors->any())
    <div class="errors">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('admin.login.attempt') }}">
    @csrf
    <label>Email</label>
    <input type="email" name="email" value="{{ old('email') }}" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <button type="submit">Sign in</button>
</form>
</body>
</html>
