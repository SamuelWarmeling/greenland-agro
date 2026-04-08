@extends('app.layout.gla')
@php
    $pageTitle = 'Historico de Depositos';
    $deposits = \App\Models\Deposit::where('user_id', auth()->id())->orderByDesc('id')->get();
@endphp
@section('content')
    <section class="hero">
        <h2>Histórico de depósitos</h2>
        <p>Acompanhe o status dos seus depositos, os valores enviados e a data de cada movimentacao na plataforma GreenLand Agro.</p>
    </section>

    <section class="section">
        <h3>Suas movimentacoes</h3>
        @if($deposits->isEmpty())
            <div class="card">
                <h4>Nenhum deposito encontrado</h4>
                <p>Quando voce iniciar um deposito, ele aparecera aqui com o status de processamento ou aprovacao.</p>
                <div class="actions">
                    <a class="btn btn-primary" href="{{ route('user.deposit') }}">Fazer primeiro deposito</a>
                </div>
            </div>
        @else
            <div class="stack-list">
                @foreach($deposits as $deposit)
                    <div class="stack-item">
                        <div class="stack-item-head">
                            <div>
                                <strong>{{ price($deposit->amount) }}</strong>
                                <div class="subtle">{{ $deposit->method_name ?: 'PIX' }} • {{ optional($deposit->created_at)->format('d/m/Y H:i') }}</div>
                            </div>
                            <span class="pill-status {{ $deposit->status === 'approved' ? 'approved' : ($deposit->status === 'pending' ? 'pending' : 'rejected') }}">
                                @if($deposit->status === 'approved')
                                    Aprovado
                                @elseif($deposit->status === 'pending')
                                    Em análise
                                @elseif($deposit->status === 'rejected')
                                    Rejeitado
                                @else
                                    {{ ucfirst($deposit->status) }}
                                @endif
                            </span>
                        </div>
                        <div class="table-like">
                            <div class="row-line"><span>Método</span><strong>{{ $deposit->method_name ?: 'PIX' }}</strong></div>
                            <div class="row-line"><span>Data</span><strong>{{ optional($deposit->created_at)->format('d/m/Y H:i') }}</strong></div>
                        </div>
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
