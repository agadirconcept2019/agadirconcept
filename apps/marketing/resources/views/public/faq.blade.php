@extends('layouts.public')
@section('title', 'FAQ — Agadir Concept')
@section('content')
<section>
    <div class="container">
        <div class="kicker">FAQ</div>
        <h1>Frequently asked questions</h1>
        <div class="grid">
            @foreach($faqItems as $item)
                <article class="card">
                    <h2>{{ $item['q'] }}</h2>
                    <p>{{ $item['a'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
