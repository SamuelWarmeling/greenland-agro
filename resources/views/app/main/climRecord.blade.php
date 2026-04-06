@extends('app.layout.gla')
@php
    $pageTitle = 'Historico de compartilhamentos';
    $proofs = \App\Models\SocialProof::where('user_id', auth()->id())->latest()->get();
@endphp
@section('content')
    <section class="hero">
        <h2>Historico de compartilhamentos</h2>
        <p>Acompanhe o status de cada envio e os bonus ja validados pela equipe da plataforma.</p>
    </section>
    <section class="section">
        <h3>Envios recentes</h3>
        <div class="grid">
            @forelse($proofs as $proof)
                <div class="card">
                    <span class="badge {{ $proof->status === 'approved' ? '' : ($proof->status === 'rejected' ? 'warn' : 'info') }}">{{ ucfirst($proof->status) }}</span>
                    <p><strong>Bonus previsto:</strong> {{ price($proof->payout_amount) }}</p>
                    <p><strong>Mensagem:</strong> {{ $proof->message ?: 'Sem mensagem enviada.' }}</p>
                    <p><strong>Data:</strong> {{ $proof->created_at }}</p>
                </div>
            @empty
                <p class="subtle">Voce ainda nao enviou nenhum compartilhamento.</p>
            @endforelse
        </div>
    </section>
@endsection
