@extends('app.layout.gla')
@php
    $pageTitle = 'Minha Equipe';
    $nextNetworkGoal = collect([5, 10, 20, 50, 100])->first(fn($goal) => $goal > $team_size);
@endphp
@section('content')
    <section class="hero">
        <span class="badge" style="background:rgba(255,255,255,0.18); color:#fff; margin-bottom:12px;">Rede GreenLand</span>
        <h2>Minha equipe</h2>
        <p>Acompanhe a evolucao da sua rede, visualize o total por nivel e veja a movimentacao que gera comissoes na plataforma.</p>
    </section>

    <section class="section">
        <h3>Visao geral</h3>
        <div class="stats">
            <div class="stat"><span class="subtle">Total de membros</span><strong>{{ $team_size }}</strong></div>
            <div class="stat"><span class="subtle">Depositos aprovados</span><strong>R$ {{ number_format($lvTotalDeposit, 2, ',', '.') }}</strong></div>
            <div class="stat"><span class="subtle">Saques aprovados</span><strong>R$ {{ number_format($lvTotalWithdraw, 2, ',', '.') }}</strong></div>
            <div class="stat"><span class="subtle">Investimento da rede</span><strong>R$ {{ number_format($totalInvestment, 2, ',', '.') }}</strong></div>
        </div>
    </section>

    <section class="section">
        <h3>Meta da sua rede</h3>
        <div class="table-like">
            <div class="row-line"><span>Membros ativos na rede</span><strong>{{ $activeMembers1 + $activeMembers2 + $activeMembers3 }}</strong></div>
            <div class="row-line"><span>Proxima meta</span><strong>{{ $nextNetworkGoal ? $nextNetworkGoal . ' membros' : 'Escala consolidada' }}</strong></div>
            <div class="row-line"><span>Faltam para chegar la</span><strong>{{ $nextNetworkGoal ? max($nextNetworkGoal - $team_size, 0) : 0 }}</strong></div>
        </div>
        @if($nextNetworkGoal)
            <div style="margin-top:16px;">
                <div style="height:12px; border-radius:999px; background:#e6eef2; overflow:hidden;">
                    <div style="width:{{ min(100, round(($team_size / $nextNetworkGoal) * 100)) }}%; height:100%; background:linear-gradient(135deg, var(--gla-blue) 0%, var(--gla-green) 100%);"></div>
                </div>
            </div>
        @endif
        <div class="actions">
            <a class="btn btn-primary" href="{{ route('user.invite') }}">Compartilhar convite</a>
        </div>
    </section>

    <section class="section">
        <h3>Desempenho por nivel</h3>
        <div class="grid">
            <div class="card">
                <h4>Nivel 1</h4>
                <div class="table-like">
                    <div class="row-line"><span>Membros</span><strong>{{ $first_level_users->count() }}</strong></div>
                    <div class="row-line"><span>Membros ativos</span><strong>{{ $activeMembers1 }}</strong></div>
                    <div class="row-line"><span>Depositos</span><strong>R$ {{ number_format($lv1Recharge, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Saques</span><strong>R$ {{ number_format($lv1Withdraw, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Compras em ciclos</span><strong>R$ {{ number_format($totalLevelInvest1, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Comissao recebida</span><strong>R$ {{ number_format($levelTotalCommission1, 2, ',', '.') }}</strong></div>
                </div>
                <div class="actions"><a class="btn btn-secondary" href="{{ route('team.details', 1) }}">Ver equipe nivel 1</a></div>
            </div>
            <div class="card">
                <h4>Nivel 2</h4>
                <div class="table-like">
                    <div class="row-line"><span>Membros</span><strong>{{ $second_level_users->count() }}</strong></div>
                    <div class="row-line"><span>Membros ativos</span><strong>{{ $activeMembers2 }}</strong></div>
                    <div class="row-line"><span>Depositos</span><strong>R$ {{ number_format($lv2Recharge, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Saques</span><strong>R$ {{ number_format($lv2Withdraw, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Compras em ciclos</span><strong>R$ {{ number_format($totalLevelInvest2, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Comissao recebida</span><strong>R$ {{ number_format($levelTotalCommission2, 2, ',', '.') }}</strong></div>
                </div>
                <div class="actions"><a class="btn btn-secondary" href="{{ route('team.details', 2) }}">Ver equipe nivel 2</a></div>
            </div>
            <div class="card">
                <h4>Nivel 3</h4>
                <div class="table-like">
                    <div class="row-line"><span>Membros</span><strong>{{ $third_level_users->count() }}</strong></div>
                    <div class="row-line"><span>Membros ativos</span><strong>{{ $activeMembers3 }}</strong></div>
                    <div class="row-line"><span>Depositos</span><strong>R$ {{ number_format($lv3Recharge, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Saques</span><strong>R$ {{ number_format($lv3Withdraw, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Compras em ciclos</span><strong>R$ {{ number_format($totalLevelInvest3, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Comissao recebida</span><strong>R$ {{ number_format($levelTotalCommission3, 2, ',', '.') }}</strong></div>
                </div>
                <div class="actions"><a class="btn btn-secondary" href="{{ route('team.details', 3) }}">Ver equipe nivel 3</a></div>
            </div>
        </div>
    </section>
@endsection
