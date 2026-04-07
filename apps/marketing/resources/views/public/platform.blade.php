@extends('layouts.public')
@section('title', 'Platform — Agadir Concept')
@section('content')
<section>
    <div class="container">
        <div class="kicker">Platform Vision</div>
        <h1>The Agadir Concept ecosystem: marketing, operations, and client collaboration.</h1>
        <p>Our platform vision connects three layers: the marketing website for acquisition, a future SaaS core for internal operations, and a future client space for transparent delivery follow-up.</p>
        <div class="grid grid-3">
            <article class="card">
                <h2>Marketing Layer (Live)</h2>
                <p>Public presentation, positioning, and conversion entry points for prospects.</p>
            </article>
            <article class="card">
                <h2>SaaS Core (In deployment roadmap)</h2>
                <p>Future business backbone for managing leads, projects, and operational workflows.</p>
            </article>
            <article class="card">
                <h2>Client Space (Future)</h2>
                <p>A dedicated area where clients will access project status, shared documents, and communication milestones.</p>
            </article>
        </div>
        <p style="margin-top:20px"><a class="btn" href="{{ route('public.contact-quote') }}">Discuss your roadmap</a></p>
    </div>
</section>
@endsection
