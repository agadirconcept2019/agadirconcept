@extends('layouts.public')
@section('title', 'Client Space — Agadir Concept')
@section('content')
<section>
    <div class="container">
        <div class="kicker">Future Client Experience</div>
        <h1>Client Space: the future collaborative layer for project transparency.</h1>
        <p>The client space is presented as a future capability. In this phase, we expose direction and value, not a live authenticated portal runtime.</p>
        <div class="grid grid-2">
            <article class="card">
                <h2>What clients will access later</h2>
                <ul>
                    <li>Project timeline and status snapshots</li>
                    <li>Shared files and key documents</li>
                    <li>Milestone feedback and validation touchpoints</li>
                </ul>
            </article>
            <article class="card">
                <h2>Why it matters</h2>
                <p>Improved visibility, faster alignment, and stronger collaboration between internal teams and client stakeholders.</p>
            </article>
        </div>
        <p style="margin-top:20px"><a class="btn" href="{{ route('public.contact-quote') }}">Plan your client experience roadmap</a></p>
    </div>
</section>
@endsection
