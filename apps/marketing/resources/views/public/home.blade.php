@extends('layouts.public')
@section('title', 'Agadir Concept — Web & Business Application Agency')
@section('content')
<section class="hero">
    <div class="container">
        <div class="kicker">Premium digital delivery</div>
        <h1>Web development and business web applications, built to drive measurable growth.</h1>
        <p>Agadir Concept helps companies launch high-quality websites and business-focused web applications, with robust hosting, maintenance, and integration support.</p>
        <a class="btn" href="{{ route('public.contact-quote') }}">Start your project</a>
    </div>
</section>
<section>
    <div class="container grid grid-3">
        <article class="card"><h2>Web Development</h2><p>Conversion-ready websites with clear structure and modern UI/UX foundations.</p></article>
        <article class="card"><h2>Business Web Apps</h2><p>Operational web applications aligned with real workflows and team productivity.</p></article>
        <article class="card"><h2>Automation & Integrations</h2><p>Connected systems to reduce manual work and improve execution speed.</p></article>
    </div>
</section>
@endsection
