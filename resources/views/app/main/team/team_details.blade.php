@extends('app.layout.gla')
@php
    $pageTitle = 'Detalhes da Equipe';
    $levelLabel = 'Nível ' . $generation;
@endphp
@section('content')
    <section class="hero">
        <span class="badge" style="background:rgba(255,255,255,0.18); color:#fff; margin-bottom:12px;">{{ $levelLabel }}</span>
        <h2>Membros da sua rede</h2>
        <p>Confira os participantes cadastrados neste nível da sua estrutura e acompanhe os dados principais de cada conta.</p>
    </section>

    <section class="section">
        <h3>{{ $levelLabel }}</h3>
        @if($users->isEmpty())
            <div class="card">
                <p>Nenhum membro encontrado neste nível ainda.</p>
            </div>
        @else
            <div class="grid">
                @foreach($users as $member)
                    <div class="card">
                        <h4>{{ $member->name && !str_starts_with($member->name, 'User') ? $member->name : 'Produtor GreenLand' }}</h4>
                        <div class="table-like">
                            <div class="row-line"><span>Telefone</span><strong>{{ gla_format_phone($member->phone) }}</strong></div>
                            <div class="row-line"><span>Código de convite</span><strong>{{ $member->ref_id ?: '--' }}</strong></div>
                            <div class="row-line"><span>Saldo</span><strong>R$ {{ number_format($member->balance ?? 0, 2, ',', '.') }}</strong></div>
                            <div class="row-line"><span>Status</span><strong>{{ $member->status ?: 'ativo' }}</strong></div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <div class="actions">
            <a class="btn btn-secondary" href="{{ route('user.team') }}">Voltar para minha equipe</a>
        </div>
    </section>
@endsection
