<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', 'Agadir Concept')</title>
    <style>
        :root{--bg:#0b1220;--surface:#0f172a;--card:#111b31;--text:#e2e8f0;--muted:#94a3b8;--accent:#38bdf8;--line:#1e293b}
        *{box-sizing:border-box} body{margin:0;font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,sans-serif;background:var(--bg);color:var(--text);line-height:1.6}
        a{color:inherit;text-decoration:none} .container{max-width:1120px;margin:0 auto;padding:0 20px}
        header{position:sticky;top:0;background:rgba(11,18,32,.92);backdrop-filter:blur(6px);border-bottom:1px solid var(--line);z-index:20}
        .nav{display:flex;justify-content:space-between;align-items:center;padding:14px 0} .brand{font-weight:700;letter-spacing:.3px}
        .menu{display:flex;gap:18px;align-items:center;font-size:.95rem;color:var(--muted)}
        .btn{display:inline-block;padding:10px 14px;border-radius:10px;border:1px solid var(--accent);color:#00131f;background:var(--accent);font-weight:600}
        .btn-ghost{background:transparent;color:var(--accent)}
        .hero{padding:90px 0 70px} h1{font-size:clamp(2rem,5vw,3.4rem);line-height:1.1;margin:0 0 16px}
        h2{font-size:clamp(1.5rem,3vw,2.2rem);margin:0 0 12px} p{margin:0 0 12px;color:var(--muted)}
        .grid{display:grid;gap:18px}.grid-2{grid-template-columns:repeat(auto-fit,minmax(260px,1fr))}.grid-3{grid-template-columns:repeat(auto-fit,minmax(220px,1fr))}
        .card{background:var(--card);border:1px solid var(--line);border-radius:14px;padding:20px}
        section{padding:58px 0;border-top:1px solid rgba(148,163,184,.08)}
        ul{margin:0;padding-left:18px;color:var(--muted)} .kicker{color:var(--accent);font-weight:600;letter-spacing:.3px;text-transform:uppercase;font-size:.78rem}
        footer{border-top:1px solid var(--line);padding:28px 0;color:var(--muted);margin-top:40px}
    </style>
</head>
<body>
<header>
    <div class="container nav">
        <a class="brand" href="{{ route('public.home') }}">Agadir Concept</a>
        <nav class="menu">
            <a href="{{ route('public.home') }}">Home</a>
            <a href="{{ route('public.services') }}">Services</a>
            <a href="{{ route('public.about') }}">About</a>
            <a href="{{ route('public.faq') }}">FAQ</a>
            <a href="{{ route('public.contact-quote') }}" class="btn btn-ghost">Contact / Quote</a>
        </nav>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer>
    <div class="container">
        <div>Agadir Concept — Web Development & Business Web Applications.</div>
        <div>Services: Web Development · Web Application Development · Hosting & Domains · Maintenance & Support · Automation & Integrations.</div>
    </div>
</footer>
</body>
</html>
