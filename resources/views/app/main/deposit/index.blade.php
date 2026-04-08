@extends('app.layout.gla')
@php $pageTitle = 'Depósito'; $methods = \App\Models\PaymentMethod::where('status', 'active')->get(); @endphp
@section('content')
    <section class="hero">
        <h2>Depósitos via PIX</h2>
        <p>O valor mínimo para depósito é {{ price(40) }}. Escolha o valor da recarga e acompanhe por aqui o fluxo PIX da sua conta GreenLand Agro.</p>
    </section>
    <section class="compact-stats">
        <div class="compact-stat">
            <span class="subtle">Mínimo por depósito</span>
            <strong>{{ price(40) }}</strong>
        </div>
        <div class="compact-stat">
            <span class="subtle">Status do fluxo</span>
            <strong>PIX em operação</strong>
        </div>
    </section>
    <section class="section">
        <h3>Escolha o valor</h3>
        <div class="quick-actions">
            @foreach([40, 80, 120, 240] as $preset)
                @if($methods->first())
                    <a class="quick-action" href="{{ route('user.deposit.amount', [$preset, $methods->first()->id]) }}">
                        <strong>{{ price($preset) }}</strong>
                        <span class="subtle">Acesso rápido para iniciar esse depósito.</span>
                    </a>
                @endif
            @endforeach
        </div>
        <form onsubmit="event.preventDefault(); var method = document.getElementById('method').value; var amount = document.getElementById('amount').value; if(method && amount){ window.location.href = '{{ url('deposit') }}/' + amount + '/' + method; }" style="margin-top:16px;">
            <div class="field">
                <label for="amount">Valor personalizado</label>
                <input id="amount" type="number" min="40" step="0.01" placeholder="Digite um valor a partir de R$ 40,00">
            </div>
            <div class="field">
                <label for="method">Método</label>
                <select id="method">
                    @foreach($methods as $method)
                        <option value="{{ $method->id }}">{{ $method->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Continuar</button>
        </form>
        <div class="actions">
            <a class="btn btn-secondary" href="{{ route('deposit.history') }}">Histórico de depósitos</a>
            <a class="btn btn-ghost" href="{{ route('user.withdraw') }}">Ir para saques</a>
        </div>
    </section>
@endsection