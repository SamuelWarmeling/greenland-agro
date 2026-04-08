@extends('app.layout.gla')
@php
    $pageTitle = 'Historico de Saques';
    $withdrawals = \App\Models\Withdrawal::where('user_id', auth()->id())->orderByDesc('id')->get();
@endphp
@section('content')
    <section class="hero">
        <h2>Historico de saques</h2>
        <p>Veja o andamento das suas solicitacoes de saque, acompanhe os valores e confirme quando cada operacao foi aprovada.</p>
    </section>

    <section class="section">
        <h3>Suas solicitacoes</h3>
        @if($withdrawals->isEmpty())
            <div class="card">
                <h4>Nenhum saque encontrado</h4>
                <p>Quando voce enviar uma solicitacao de saque, ela aparecera aqui com o status atualizado.</p>
                <div class="actions">
                    <a class="btn btn-primary" href="{{ route('user.withdraw') }}">Solicitar saque</a>
                </div>
            </div>
        @else
            <div class="stack-list">
                @foreach($withdrawals as $withdrawal)
                    <div class="stack-item">
                        <div class="stack-item-head">
                            <div>
                                <strong>{{ price($withdrawal->amount) }}</strong>
                                <div class="subtle">{{ $withdrawal->method_name ?: 'PIX' }} • {{ optional($withdrawal->created_at)->format('d/m/Y H:i') }}</div>
                            </div>
                            <span class="pill-status {{ $withdrawal->status === 'approved' ? 'approved' : ($withdrawal->status === 'pending' ? 'pending' : 'rejected') }}">
                                @if($withdrawal->status === 'approved')
                                    Aprovado
                                @elseif($withdrawal->status === 'pending')
                                    Em analise
                                @elseif($withdrawal->status === 'rejected')
                                    Rejeitado
                                @else
                                    {{ ucfirst($withdrawal->status) }}
                                @endif
                            </span>
                        </div>
                        <div class="table-like">
                            <div class="row-line"><span>Liquido estimado</span><strong>{{ price($withdrawal->final_amount) }}</strong></div>
                            <div class="row-line"><span>Taxa</span><strong>{{ price($withdrawal->charge) }}</strong></div>
                            <div class="row-line"><span>Metodo</span><strong>{{ $withdrawal->method_name ?: 'PIX' }}</strong></div>
                            <div class="row-line"><span>Data</span><strong>{{ optional($withdrawal->created_at)->format('d/m/Y H:i') }}</strong></div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <div class="actions">
            <a class="btn btn-primary" href="{{ route('user.withdraw') }}">Novo saque</a>
            <a class="btn btn-secondary" href="{{ route('user.deposit') }}">Ir para depositos</a>
        </div>
    </section>
@endsection
