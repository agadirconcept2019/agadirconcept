<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Marketing CMS')</title>
    <style>
        body{font-family:Arial,sans-serif;margin:24px;line-height:1.4}
        nav a{margin-right:10px}
        table{width:100%;border-collapse:collapse;margin-top:12px}
        th,td{border:1px solid #ddd;padding:8px;vertical-align:top}
        input,textarea,select{width:100%;padding:8px;margin:4px 0 12px}
        .btn{display:inline-block;border:1px solid #333;padding:6px 10px;text-decoration:none;background:#f5f5f5;color:#000}
        form.inline{display:inline}
    </style>
</head>
<body>
<nav>
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <a href="{{ route('admin.pages.index') }}">Pages</a>
    <a href="{{ route('admin.posts.index') }}">Articles</a>
    <a href="{{ route('admin.media.index') }}">Media</a>
    <a href="{{ route('admin.menus.index') }}">Menus</a>
    <a href="{{ route('admin.settings.index') }}">Settings</a>
    <a href="{{ route('admin.blocks.index') }}">Reusable Blocks</a>
    <form class="inline" method="post" action="{{ route('admin.logout') }}">@csrf <button class="btn">Logout</button></form>
</nav>

@if ($errors->any())
    <div style="background:#ffecec;border:1px solid #e00;padding:10px;margin-top:12px">
        <strong>Validation error:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>@yield('heading')</h1>
@yield('content')
</body>
</html>
