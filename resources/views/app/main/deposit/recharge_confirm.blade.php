@extends('app.layout.gla')
@php
    $pageTitle = 'Confirmar Deposito';
    $pixKey = $payment_method->address ?: 'Chave PIX nao configurada';
@endphp
@section('content')
    <section class="hero">
        <span class="badge" style="background:rgba(255,255,255,0.18); color:#fff; margin-bottom:12px;">Fluxo PIX da plataforma</span>
        <h2>Confirmar deposito</h2>
        <p>Confira os dados da sua recarga e acompanhe por esta area o processamento do pagamento vinculado a sua conta GreenLand Agro.</p>
    </section>

    <section class="section">
        <h3>Dados do pagamento</h3>
        <div class="grid cols-2">
            <div class="card">
                <h4>Metodo</h4>
                <div class="price" style="font-size:1.15rem;">{{ $payment_method->name }}</div>
                <p class="subtle">Canal configurado para recebimento.</p>
            </div>
            <div class="card">
                <h4>Valor solicitado</h4>
                <div class="price" style="font-size:1.15rem;">{{ price($amount) }}</div>
                <p class="subtle">Deposito minimo permitido: {{ price(40) }}</p>
            </div>
        </div>
        <div class="card" style="margin-top:14px;">
            <h4>Canal de pagamento</h4>
            <div class="price" style="font-size:1.1rem; word-break:break-word;">{{ $pixKey }}</div>
            <p class="subtle">Os dados exibidos acompanham o canal configurado para o seu metodo de deposito.</p>
        </div>
    </section>

    <section class="section">
        <h3>Como acompanhar a recarga</h3>
        <div class="card">
            <ul class="list">
                <li>Confira o valor solicitado e o canal de pagamento antes de prosseguir.</li>
                <li>Use o metodo PIX configurado para concluir a recarga da sua conta.</li>
                <li>Acompanhe o status da solicitacao pelo historico de depositos.</li>
                <li>Assim que o pagamento for confirmado, o saldo fica disponivel na plataforma.</li>
            </ul>
        </div>
        <div class="actions">
            <a class="btn btn-primary" href="{{ route('user.deposit') }}">Voltar para depositos</a>
            <a class="btn btn-secondary" href="{{ route('deposit.history') }}">Ver historico</a>
        </div>
    </section>
@endsection
