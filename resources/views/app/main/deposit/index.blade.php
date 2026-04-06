@extends('app.layout.gla')
@php $pageTitle = 'Deposito'; $methods = \App\Models\PaymentMethod::where('status', 'active')->get(); @endphp
@section('content')
    <section class="hero">
        <h2>Depositos via PIX</h2>
        <p>O valor minimo para deposito e {{ price(40) }}. O processamento e rapido e a validacao pode depender do envio do comprovante.</p>
    </section>
    <section class="section">
        <h3>Escolha o valor</h3>
        <div class="actions">
            @foreach([40, 80, 120, 240] as $preset)
                @if($methods->first())
                    <a class="btn btn-secondary" href="{{ route('user.deposit.amount', [$preset, $methods->first()->id]) }}">{{ price($preset) }}</a>
                @endif
            @endforeach
        </div>
        <form onsubmit="event.preventDefault(); var method = document.getElementById('method').value; var amount = document.getElementById('amount').value; if(method && amount){ window.location.href = '{{ url('deposit') }}/' + amount + '/' + method; }" style="margin-top:16px;">
            <div class="field">
                <label for="amount">Valor personalizado</label>
                <input id="amount" type="number" min="40" step="0.01" placeholder="Digite um valor a partir de R$ 40,00">
            </div>
            <div class="field">
                <label for="method">Metodo</label>
                <select id="method">
                    @foreach($methods as $method)
                        <option value="{{ $method->id }}">{{ $method->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Continuar</button>
        </form>
    </section>
@endsection
