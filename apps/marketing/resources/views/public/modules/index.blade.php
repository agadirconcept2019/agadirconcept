@extends('layouts.public')
@section('title', 'Modules — Agadir Concept')
@section('content')
<section>
    <div class="container">
        <div class="kicker">Future Modules</div>
        <h1>Modular business capabilities planned for progressive rollout.</h1>
        <p>Modules are presented to clarify product direction. They are not advertised as fully live SaaS features at this stage.</p>
        <div class="grid grid-2">
            <article class="card">
                <h2>CRM Module</h2>
                <p>Commercial pipeline foundations for leads, contacts, companies, and opportunity tracking.</p>
                <a class="btn" href="{{ route('public.modules.crm') }}">View CRM vision</a>
            </article>
            <article class="card">
                <h2>Project Manager Module</h2>
                <p>Future project execution layer for planning, delivery follow-up, and team coordination.</p>
                <a class="btn" href="{{ route('public.modules.project-manager') }}">View PM vision</a>
            </article>
        </div>
    </div>
</section>
@endsection
