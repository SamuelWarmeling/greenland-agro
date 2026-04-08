@extends('app.layout.gla')
@php
    $pageTitle = 'Confirmar Deposito';
    $pixKey = $payment_method->address ?: 'Chave PIX nao configurada';
@endphp
@section('content')
    <section class="hero">
        <span class="badge" style="background:rgba(255,255,255,0.18); color:#fff; margin-bottom:12px;">Deposito manual via PIX</span>
        <h2>Confirmar deposito</h2>
        <p>Esta etapa ainda funciona com envio de comprovante. O usuario faz o PIX, informa o identificador da transacao e envia o comprovante para aprovacao interna.</p>
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
            <h4>Chave PIX</h4>
            <div class="price" style="font-size:1.1rem; word-break:break-word;">{{ $pixKey }}</div>
            <p class="subtle">Copie essa chave e realize o pagamento no aplicativo do seu banco.</p>
        </div>
    </section>

    <section class="section">
        <h3>Enviar comprovante</h3>
        <form action="{{ route('payment_confirmation') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="amount" value="{{ $amount }}">
            <input type="hidden" name="payment_method" value="{{ $payment_method->name }}">

            <div class="field">
                <label for="transaction_id">Identificador da transacao</label>
                <input id="transaction_id" name="transaction_id" type="text" placeholder="Ex.: E2E, ID do PIX ou referencia bancaria" required>
                <small>Use o codigo gerado no comprovante ou no extrato do PIX.</small>
            </div>

            <div class="field">
                <label for="photo">Comprovante do pagamento</label>
                <input id="photo" name="photo" type="file" accept="image/*" required>
                <small>Envie uma imagem legivel do comprovante para agilizar a aprovacao.</small>
            </div>

            <div class="card" style="margin:16px 0;">
                <h4>Como funciona</h4>
                <ul class="list">
                    <li>Realize o PIX para a chave informada acima.</li>
                    <li>Guarde o comprovante e copie o identificador da transacao.</li>
                    <li>Envie os dados neste formulario para analise da equipe.</li>
                    <li>O saldo sera liberado apos aprovacao interna.</li>
                </ul>
            </div>

            <div class="actions">
                <button class="btn btn-primary" type="submit">Enviar comprovante</button>
                <a class="btn btn-secondary" href="{{ route('deposit.history') }}">Ver historico</a>
                <a class="btn btn-ghost" href="{{ route('user.deposit') }}">Voltar</a>
            </div>
        </form>
    </section>
@endsection
