@extends('app.layout.gla')
@php $pageTitle = 'Niveis VIP'; @endphp
@section('content')
    <section class="hero">
        <h2>Evolucao de niveis VIP</h2>
        <p>Depois da ativacao inicial, os niveis sao definidos pelo valor total investido na plataforma.</p>
    </section>
    <section class="section">
        <div class="timeline">
            <div class="timeline-item"><strong>VIP 1</strong><br>Ativacao inicial com plano base a partir de {{ price(40) }}.</div>
            <div class="timeline-item"><strong>VIP 2</strong><br>{{ price(200) }} em ativos.</div>
            <div class="timeline-item"><strong>VIP 3</strong><br>{{ price(600) }} em ativos.</div>
            <div class="timeline-item"><strong>VIP 4</strong><br>{{ price(1200) }} em ativos.</div>
            <div class="timeline-item"><strong>VIP 5</strong><br>{{ price(2400) }} em ativos.</div>
            <div class="timeline-item"><strong>VIP 6</strong><br>{{ price(4800) }} em ativos.</div>
        </div>
    </section>
@endsection
