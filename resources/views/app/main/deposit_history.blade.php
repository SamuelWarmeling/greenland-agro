@extends('app.layout.gla')
@php
    $pageTitle = 'Historico de Depositos';
    $deposits = \App\Models\Deposit::where('user_id', auth()->id())->orderByDesc('id')->get();
@endphp
@section('content')
    <section class="hero">
        <h2>Historico de depositos</h2>
        <p>Acompanhe o status das suas recargas, os valores enviados e a data de cada solicitacao na plataforma GreenLand Agro.</p>
    </section>

    <section class="section">
        <h3>Suas movimentacoes</h3>
        @if($deposits->isEmpty())
            <div class="card">
                <h4>Nenhum deposito encontrado</h4>
                <p>Quando voce iniciar uma recarga, ela aparecera aqui com o status de processamento ou aprovacao.</p>
                <div class="actions">
                    <a class="btn btn-primary" href="{{ route('user.deposit') }}">Fazer primeiro deposito</a>
                </div>
            </div>
        @else
            <div class="grid">
                @foreach($deposits as $deposit)
                    <div class="card">
                        <div class="row-line"><span>Valor</span><strong>{{ price($deposit->amount) }}</strong></div>
                        <div class="row-line"><span>Metodo</span><strong>{{ $deposit->method_name ?: 'PIX' }}</strong></div>
                        <div class="row-line"><span>Data</span><strong>{{ optional($deposit->created_at)->format('d/m/Y H:i') }}</strong></div>
                        <div class="row-line"><span>Status</span><strong>
                            @if($deposit->status === 'approved')
                                Aprovado
                            @elseif($deposit->status === 'pending')
                                Em analise
                            @elseif($deposit->status === 'rejected')
                                Rejeitado
                            @else
                                {{ ucfirst($deposit->status) }}
                            @endif
                        </strong></div>
                        @if($deposit->transaction_id)
                            <div class="row-line"><span>Transacao</span><strong>{{ $deposit->transaction_id }}</strong></div>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
        <div class="actions">
            <a class="btn btn-primary" href="{{ route('user.deposit') }}">Novo deposito</a>
            <a class="btn btn-secondary" href="{{ route('user.withdraw') }}">Ir para saques</a>
        </div>
    </section>
@endsection
