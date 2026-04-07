@extends('layouts.public')
@section('title', 'CRM Module — Agadir Concept')
@section('content')
<section>
    <div class="container">
        <div class="kicker">Module Preview</div>
        <h1>CRM module vision for structured commercial follow-up.</h1>
        <p>This page presents product direction only. It does not claim a fully live CRM runtime in the current phase.</p>
        <div class="card">
            <h2>Planned focus areas</h2>
            <ul>
                <li>Lead and contact qualification foundations</li>
                <li>Company and opportunity lifecycle tracking</li>
                <li>Commercial visibility for better decision-making</li>
            </ul>
        </div>
        <p style="margin-top:20px"><a class="btn" href="{{ route('public.contact-quote') }}">Request a CRM-oriented discovery call</a></p>
    </div>
</section>
@endsection
