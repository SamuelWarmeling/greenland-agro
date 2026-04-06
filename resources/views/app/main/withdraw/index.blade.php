@extends('app.layout.gla')
@php $pageTitle = 'Saque'; @endphp
@section('content')
    <section class="hero">
        <h2>Regras de saque</h2>
        <p>Solicitacoes das 10:00 as 17:00, limite de 1 saque por dia, valor minimo de {{ price(10) }} e taxa fixa de 10%.</p>
    </section>
    <section class="section">
        <h3>Solicitar saque</h3>
        <div class="table-like">
            <div class="row-line"><span>Saldo disponivel</span><strong>{{ price(auth()->user()->balance) }}</strong></div>
            <div class="row-line"><span>Chave PIX cadastrada</span><strong>{{ auth()->user()->gateway_number ?: 'Nao cadastrada' }}</strong></div>
        </div>
        <form action="{{ route('user.withdraw.request') }}" method="POST" style="margin-top:16px;">
            @csrf
            <div class="field">
                <label for="amount">Valor do saque</label>
                <input id="amount" name="amount" type="number" min="10" step="0.01" placeholder="Minimo de R$ 10,00" required>
                <small>Processamento medio: 2 a 48 horas.</small>
            </div>
            <div class="field">
                <label for="password">Senha de confirmacao</label>
                <input id="password" name="password" type="password" placeholder="Informe sua senha" required>
            </div>
            <button class="btn btn-primary" type="submit">Enviar solicitacao</button>
        </form>
    </section>
@endsection
