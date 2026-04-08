@extends('app.layout.gla')
@php
    $pageTitle = 'Confirmar Deposito';
    $pixKey = $payment_method->address ?: 'Chave PIX nao configurada';
@endphp
@section('content')
    <section class="hero">
        <span class="badge" style="background:rgba(255,255,255,0.18); color:#fff; margin-bottom:12px;">Gateway PIX automatica</span>
        <h2>Confirmar deposito</h2>
        <p>Esta etapa sera conectada a uma gateway PIX automatica. A interface abaixo ja foi ajustada para o fluxo de cobranca automatica da GreenLand Agro.</p>
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
            <p class="subtle">Esse campo sera substituido automaticamente pelos dados retornados pela gateway PIX.</p>
        </div>
    </section>

    <section class="section">
        <h3>Fluxo previsto da gateway</h3>
        <div class="card">
            <ul class="list">
                <li>O sistema vai gerar automaticamente a cobranca PIX.</li>
                <li>O usuario vai copiar o codigo ou escanear o QR Code dinamico.</li>
                <li>A confirmacao do pagamento vai voltar da gateway sem envio manual de comprovante.</li>
                <li>O saldo sera atualizado automaticamente apos confirmacao da transacao.</li>
            </ul>
        </div>
        <div class="card" style="margin-top:16px;">
            <h4>Status atual</h4>
            <p>A integracao automatica ainda precisa ser conectada no backend. Quando a gateway for definida, esta etapa passa a gerar cobrancas reais automaticamente.</p>
        </div>
        <div class="actions">
            <a class="btn btn-primary" href="{{ route('user.deposit') }}">Voltar para depositos</a>
            <a class="btn btn-secondary" href="{{ route('deposit.history') }}">Ver historico</a>
        </div>
    </section>
@endsection
