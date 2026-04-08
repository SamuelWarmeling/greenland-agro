@extends('app.layout.gla')
@php
    $pageTitle = 'Detalhes da Equipe';
    $levelLabel = 'Nivel ' . $generation;
@endphp
@section('content')
    <section class="hero">
        <span class="badge" style="background:rgba(255,255,255,0.18); color:#fff; margin-bottom:12px;">{{ $levelLabel }}</span>
        <h2>Lista da equipe</h2>
        <p>Confira os membros cadastrados neste nivel da sua rede e acompanhe os identificadores de cada conta.</p>
    </section>

    <section class="section">
        <h3>{{ $levelLabel }}</h3>
        @if($users->isEmpty())
            <div class="card">
                <p>Nenhum membro encontrado neste nivel ainda.</p>
            </div>
        @else
            <div class="grid">
                @foreach($users as $member)
                    <div class="card">
                        <h4>{{ $member->name && !str_starts_with($member->name, 'User') ? $member->name : 'Produtor GreenLand' }}</h4>
                        <div class="table-like">
                            <div class="row-line"><span>Telefone</span><strong>{{ $member->phone ?: '--' }}</strong></div>
                            <div class="row-line"><span>Codigo</span><strong>{{ $member->ref_id ?: '--' }}</strong></div>
                            <div class="row-line"><span>Saldo</span><strong>R$ {{ number_format($member->balance ?? 0, 2, ',', '.') }}</strong></div>
                            <div class="row-line"><span>Status</span><strong>{{ $member->status ?: 'active' }}</strong></div>
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
