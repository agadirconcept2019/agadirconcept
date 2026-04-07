@extends('layouts.public')
@section('title', 'Project Manager Module — Agadir Concept')
@section('content')
<section>
    <div class="container">
        <div class="kicker">Module Preview</div>
        <h1>Project Manager module vision for delivery clarity and control.</h1>
        <p>This is a forward-looking presentation page. It does not represent a fully deployed project-management SaaS module yet.</p>
        <div class="card">
            <h2>Planned focus areas</h2>
            <ul>
                <li>Project roadmap and milestone tracking</li>
                <li>Task-level coordination and accountability</li>
                <li>Document and communication visibility for stakeholders</li>
            </ul>
        </div>
        <p style="margin-top:20px"><a class="btn" href="{{ route('public.contact-quote') }}">Discuss your delivery workflow</a></p>
    </div>
</section>
@endsection
