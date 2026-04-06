@extends('layouts.public')
@section('title', $service['title'].' — Agadir Concept')
@section('content')
<section>
    <div class="container">
        <div class="kicker">Service detail</div>
        <h1>{{ $service['title'] }}</h1>
        <p>{{ $service['summary'] }}</p>
        <div class="card">
            <h2>What you get</h2>
            <ul>
                @foreach($service['highlights'] as $point)
                    <li>{{ $point }}</li>
                @endforeach
            </ul>
        </div>
        <p style="margin-top:20px"><a class="btn" href="{{ route('public.contact-quote') }}">Request a quote</a></p>
    </div>
</section>
@endsection
