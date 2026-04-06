@extends('layouts.public')
@section('title', 'Services — Agadir Concept')
@section('content')
<section>
    <div class="container">
        <div class="kicker">Services</div>
        <h1>Core services for digital growth and operational excellence.</h1>
        <div class="grid grid-2">
            @foreach($services as $service)
                <article class="card">
                    <h2>{{ $service['title'] }}</h2>
                    <p>{{ $service['summary'] }}</p>
                    <a class="btn" href="{{ route('public.service.show', ['slug' => $service['slug']]) }}">View details</a>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
