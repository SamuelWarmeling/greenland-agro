@extends('app.layout.gla')
@php $pageTitle = 'Check-in'; @endphp
@section('content')
    <section class="hero">
        <h2>Check-in diário</h2>
        <p>Acesse a plataforma todos os dias e garanta {{ price(gla_checkin_amount()) }} de bônus acumulativo por constância.</p>
    </section>
    <section class="section">
        <h3>Como funciona</h3>
        <ul class="list">
            <li>Entre na plataforma diariamente.</li>
            <li>Confirme o check-in uma vez por dia.</li>
            <li>O valor cai diretamente no saldo quando a operacao e aceita.</li>
        </ul>
        <div class="actions">
            <a class="btn btn-primary" href="{{ route('checkin') }}">Receber bônus de hoje</a>
        </div>
    </section>
@endsection
