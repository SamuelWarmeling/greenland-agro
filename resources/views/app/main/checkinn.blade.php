@extends('app.layout.gla')
@php $pageTitle = 'Check-in'; @endphp
@section('content')
    <section class="hero">
        <h2>Check-in diario</h2>
        <p>Acesse a plataforma todos os dias e garanta {{ price(gla_checkin_amount()) }} de bonus acumulativo por constancia.</p>
    </section>
    <section class="section">
        <h3>Como funciona</h3>
        <ul class="list">
            <li>Entre na plataforma diariamente.</li>
            <li>Confirme o check-in uma vez por dia.</li>
            <li>O valor cai diretamente no saldo quando a operacao e aceita.</li>
        </ul>
        <div class="actions">
            <a class="btn btn-primary" href="{{ route('checkin') }}">Receber bonus de hoje</a>
        </div>
    </section>
@endsection
