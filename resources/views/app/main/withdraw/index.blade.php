@extends('app.layout.gla')
@php
    $pageTitle = 'Saque';
    $pixKeyType = old('gateway_method', auth()->user()->gateway_method ?: 'CPF');
@endphp
@section('content')
    <section class="hero">
        <h2>Regras de saque</h2>
        <p>Solicitacoes das 10:00 as 17:00, limite de 1 saque por dia, valor minimo de {{ price(gla_withdraw_minimum()) }} e taxa fixa de 10%.</p>
    </section>
    <section class="compact-stats">
        <div class="compact-stat">
            <span class="subtle">Saldo disponivel</span>
            <strong>{{ price(auth()->user()->balance) }}</strong>
        </div>
        <div class="compact-stat">
            <span class="subtle">Chave PIX</span>
            <strong>{{ filled(auth()->user()->gateway_number) ? 'Cadastrada' : 'Pendente' }}</strong>
        </div>
    </section>
    <section class="section">
        <h3>Solicitar saque</h3>
        <div class="table-like">
            <div class="row-line"><span>Saldo disponivel</span><strong>{{ price(auth()->user()->balance) }}</strong></div>
            <div class="row-line"><span>Chave PIX cadastrada</span><strong>{{ gla_mask_pix_key(auth()->user()->gateway_number, auth()->user()->gateway_method) }}</strong></div>
        </div>
        <form action="{{ route('user.withdraw.request') }}" method="POST" style="margin-top:16px;">
            @csrf
            <div class="field">
                <label for="amount">Valor do saque</label>
                <input id="amount" name="amount" type="number" min="{{ gla_withdraw_minimum() }}" step="0.01" placeholder="Minimo de {{ price(gla_withdraw_minimum()) }}" required>
                <small>Processamento medio: 2 a 48 horas.</small>
            </div>
            <div class="field">
                <label for="password">Senha de confirmacao</label>
                <input id="password" name="password" type="password" placeholder="Informe sua senha" required>
            </div>
            <button class="btn btn-primary" type="submit">Enviar solicitacao</button>
        </form>
    </section>

    <section class="section">
        <h3>Chave PIX para recebimento</h3>
        <p class="subtle">Cadastre ou atualize a chave PIX usada nos seus saques. Esse dado fica vinculado a sua conta e sera usado no processamento das retiradas.</p>
        <form action="{{ route('setup.gateway.submit') }}" method="POST" style="margin-top:16px;">
            @csrf
            <input type="hidden" name="name" value="{{ auth()->user()->name ?: 'Produtor GreenLand' }}">
            <div class="field">
                <label for="gateway_method">Tipo de chave PIX</label>
                <select id="gateway_method" name="gateway_method" required>
                    @foreach(gla_pix_key_type_options() as $value => $label)
                        <option value="{{ $value }}" {{ $pixKeyType === $value ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="field">
                <label for="gateway_number">Chave PIX</label>
                <input
                    id="gateway_number"
                    name="gateway_number"
                    type="text"
                    value="{{ old('gateway_number', auth()->user()->gateway_number) }}"
                    placeholder="CPF, telefone, email ou chave aleatoria"
                    required
                >
                <small>Selecione o tipo e informe a chave PIX exatamente como ela esta cadastrada no seu banco.</small>
            </div>
            <button class="btn btn-secondary" type="submit">
                {{ auth()->user()->gateway_number ? 'Atualizar chave PIX' : 'Cadastrar chave PIX' }}
            </button>
        </form>
    </section>
@endsection
