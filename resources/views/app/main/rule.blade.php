@extends('app.layout.gla')
@php $pageTitle = 'Regras'; @endphp
@section('content')
    <section class="hero">
        <h2>Regras principais da plataforma</h2>
        <p>As condicoes abaixo resumem os planos, a progressao de VIP, os convites e as regras operacionais da GreenLand Agro.</p>
    </section>
    <section class="section">
        <h3>Operacao</h3>
        <ul class="list">
            <li>Para sair do VIP 0, e obrigatoria a compra de um plano base.</li>
            <li>A partir do VIP 1, novos niveis sao liberados pelo valor total investido.</li>
            <li>Os ganhos dependem dos ciclos ativos e da estratégia de reinvestimento.</li>
            <li>Solicitações de saque fora do horário serão processadas no próximo dia útil.</li>
        </ul>
    </section>
    <section class="section">
        <h3>Depósitos e saques</h3>
        <ul class="list">
            <li>Deposito minimo: {{ price(40) }} via PIX.</li>
            <li>Saque minimo: {{ price(gla_withdraw_minimum()) }}.</li>
            <li>Taxa de saque: 10% sobre o valor solicitado.</li>
            <li>Horario de saque: 10:00 as 17:00.</li>
            <li>Limite de 1 saque por dia.</li>
            <li>Cada ciclo ou evento pode ser adquirido apenas uma única vez por usuário.</li>
        </ul>
    </section>
@endsection
